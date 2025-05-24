<?php
namespace App\Controllers;

use App\Models\AdminModel;

class Home extends BaseController
{

    private $loginfield    = ['username', 'password'];
    private $studentFields = ['firstname', 'lastname', 'dob', 'class', 'section', 'grade', 'image'];

    protected $session;
    public function __construct()
    {
        $this->session = session();

        // Skip session check for index and login during POST/GET
        $router     = service('router');
        $controller = $router->controllerName();
        $method     = $router->methodName();
        $request    = service('request');

        // Allow index and login for both GET and POST
        if (! $this->session->get('loggedIn')) {
            if (! in_array($method, ['userIndex', 'index', 'registration'])) {
                // Redirect non-auth users trying to access other methods
                echo '<script>window.location.href = "' . base_url() . '";</script>';
                die();
            }
        }
    }

    public function registration()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $firstname            = $this->request->getPost('firstname');
            $lastname             = $this->request->getPost('lastname');
            $email                = $this->request->getPost('email');
            $phone                = $this->request->getPost('phone');
            $dob                  = $this->request->getPost('dob');
            $gender               = $this->request->getPost('gender');
            $maritalStatus        = $this->request->getPost('maritalStatus');
            $address              = $this->request->getPost('address');
            $city                 = $this->request->getPost('city');
            $state                = $this->request->getPost('state');
            $zip                  = $this->request->getPost('zip');
            $country              = $this->request->getPost('country');
            $aadhar               = $this->request->getPost('aadhar');
            $education            = $this->request->getPost('education');
            $occupation           = $this->request->getPost('occupation');
            $accountHolderName    = $this->request->getPost('accountHolderName');
            $accountNumber        = $this->request->getPost('accountNumber');
            $confirmAccountNumber = $this->request->getPost('confirmAccountNumber');
            $bankName             = $this->request->getPost('bankName');
            $ifscCode             = $this->request->getPost('ifscCode');
            $accountType          = $this->request->getPost('accountType');
            $branchName           = $this->request->getPost('branchName');
            $password             = $this->request->getPost('password');
            $confirmPassword      = $this->request->getPost('confirmPassword');

            // Confirm password and account number

            // File uploads

            $profilePicName = "";
            $panName        = "";
            $proofName      = "";
            if ($profilePic = $this->request->getFile('profile_pic')) {
                if ($profilePic->isValid() && ! $profilePic->hasMoved()) {
                    $profilePicName = $profilePic->getClientName();
                    $profilePic->move(WRITEPATH . 'uploads\profile_pics', $profilePicName);
                }
            }
            if ($pan = $this->request->getFile('panCard')) {
                if ($pan->isValid() && ! $pan->hasMoved()) {
                    $panName = $pan->getClientName(); //$pan->);
                    $pan->move(WRITEPATH . 'uploads\panCard', $panName);
                }
            }
            if ($paymentScreenshot = $this->request->getFile('paymentScreenshot')) {
                if ($paymentScreenshot->isValid() && ! $paymentScreenshot->hasMoved()) {
                    $proofName = $paymentScreenshot->getClientName() . "_" . uniqid();
                    $paymentScreenshot->move(WRITEPATH . 'uploads\paymentScreenshot', $proofName);
                }
            }

            $model = new AdminModel();
            $model->tables('registration', 'id', ['cust_id', 'fname', 'lname', 'email', 'phone', 'dob', 'gender', 'maritalStatus', 'address', 'city', 'state', 'zip', 'country', 'aadhar', 'education', 'occupation', 'accountHolderName', 'accountNumber', 'bankName', 'ifscCode', 'accountType', 'branchName', 'password', 'profilePicName', 'pan_name', 'proof_name']);

            $data = [
                'cust_id'           => $model->generateDynamicCustomerId('cust_id'),
                'fname'             => $firstname,
                'lname'             => $lastname,
                'email'             => $email,
                'phone'             => $phone,
                'dob'               => $dob,
                'gender'            => $gender,
                'maritalStatus'     => $maritalStatus,
                'address'           => $address,
                'city'              => $city,
                'state'             => $state,
                'zip'               => $zip,
                'country'           => $country,
                'aadhar'            => $aadhar,
                'education'         => $education,
                'occupation'        => $occupation,
                'accountHolderName' => $accountHolderName,
                'accountNumber'     => $accountNumber,
                'bankName'          => $bankName,
                'ifscCode'          => $ifscCode,
                'accountType'       => $accountType,
                'branchName'        => $branchName,
                'password'          => $password,
                'profilePicName'    => $profilePicName,
                'pan_name'          => $panName,
                'proof_name'        => $proofName,
            ];

            if ($model->insert($data)) {
                return redirect()->to('/');
            } else {
                print_r($model->errors());
                echo "Insert failed!";
            }
        }
        return view('form');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Use getJSON
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $model = new AdminModel();
            $model->tables('login', 'id', ['username', 'password']);
            $user = $model->login($username, $password);

            if ($user) {
                session()->set('loggedIn', true);
                session()->set('user_id', $user['id']);

                return redirect()->to('/home'); // Redirect to home page

            } else {
                return redirect()->to('/')->with('error', 'Invalid username or password');
            }
        }

        return view('login');
    }
    public function userIndex()
    {
        $model = model('App\Models\AdminModel');
        $model->tables('image', 'id', ['image', 'status']);
        $data['images'] = $model->where('status', 1)->findAll();

        $productsmodel = new AdminModel();
        $productsmodel->tables('products', 'id', ['name', 'image', 'description', 'status']);
        $data['products'] = $productsmodel->where('status', 1)->findAll();

        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $data['tours'] = $model->where('status', 'Active')->findAll();

        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $data['awards'] = $model->where('status', 'Active')->findAll();

        return view('user', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin'); // Redirect to login page
    }

    public function show()
    {
        $model = new AdminModel();
        $model->tables('login', 'id', ['username', 'password']);
        $users = $model->findAll();
        // Send JSON header
        return $this->response->setJSON(['users' => $users]);
    }

    public function home()
    {
        return view('index');
    }
    public function dashboard()
    {
        return redirect()->to('upimage');
    }

    public function imageList()
    {
        $model = new AdminModel();
        $model->tables('image', 'id', ['image', 'status']);

        // Show all images to admin
        $data['images'] = $model->findAll();

        return view('DetailsShow', $data);
    }

    public function delete($id)
    {
        $model = new AdminModel();
        $model->tables('image', 'id', ['image', 'status']);

        // optionally delete the image file too:
        $image = $model->find($id);
        if ($image && file_exists(FCPATH . 'uploads/' . $image['image'])) {
            unlink(FCPATH . 'uploads/' . $image['image']);
        }

        $model->delete($id);
        return redirect()->to('DetailsShow'); // adjust to your actual list page
    }

    public function userImages()
    {

        $productsmodel = new AdminModel();
        $productsmodel->tables('products', 'id', ['name', 'image', 'description', 'status']);
        $data['products'] = $productsmodel->where('status', 1)->findAll();

        return view('user_images', $data);
    }

    public function userProduct()
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);
        $products = $model->where('status', 1)->findAll();

        if (empty($products)) {
            echo 'No active products found.';
            var_dump($model->getLastQuery());
            die;
        }

        $data['products'] = $products;
        return view('user_products', $data);
    }

    public function uploadForm()
    {
        return view('upimage');
    }

    public function save()
    {
        $model = new AdminModel();
        $model->tables('image', 'id', ['image', 'status']);

        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);

            $model->insertRecord([
                'image'  => $newName,
                'status' => 0,
            ]);
        }

        return redirect()->to('image-list');
    }

    public function toggle($id)
    {
        $model = new AdminModel();
        $model->tables('image', 'id', ['image', 'status']);

        $record = $model->find($id);
        if ($record) {
            $newStatus = $record['status'] == 1 ? 0 : 1;
            $model->update($id, ['status' => $newStatus]);
        }

        return redirect()->to('image-list');
    }

    public function edit($id)
    {
        $model = new AdminModel();
        $model->tables('image', 'id', ['image', 'status']);

        $data['record'] = $model->find($id);
        return view('edit_image', $data);
    }

    public function update($id)
    {
        $model = new AdminModel();
        $model->tables('image', 'id', ['image', 'status']);

        $data = [];

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && ! $file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        if (! empty($data)) {
            $model->update($id, $data);
        }

        return redirect()->to('image-list');
    }
    public function product()
    {

        return view('product', ); // loads the user view with carousel
    }
    public function saveProduct()
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        $file = $this->request->getFile('product_image');
        if ($file->isValid() && ! $file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);

            $model->insertRecord([
                'name'        => $this->request->getPost('product_name'),
                'image'       => $newName,
                'description' => $this->request->getPost('product_description'),
                'status'      => 0,
            ]);
        }

        return redirect()->to('product_list');
    }
    public function productList()
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

                                               // Fix variable name
        $data['products'] = $model->findAll(); // changed from 'images' to 'products'

        return view('product_list', $data);
    }

    public function productToggle($id)
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        $product = $model->find($id);
        if ($product) {
            $newStatus = $product['status'] == 1 ? 0 : 1;
            $model->update($id, ['status' => $newStatus]);
        }

        return redirect()->to('product_list');
    }

    public function productEdit($id)
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        $data['product'] = $model->find($id);
        return view('product_edit', $data);
        return redirect()->to('product_list'); // Create this view
    }

    public function productUpdate($id)
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        $data = [
            'name'        => $this->request->getPost('product_name'),
            'description' => $this->request->getPost('product_description'),
        ];

        $file = $this->request->getFile('product_image');
        if ($file->isValid() && ! $file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        $model->update($id, $data);

        return redirect()->to('product_list');
    }

    public function deleteProduct($id)
    {
        $model = new \App\Models\AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        if ($model->delete($id)) {
            return redirect()->to(base_url('product_list'))->with('message', 'Product deleted successfully');
        } else {
            return redirect()->to(base_url('product_list'))->with('error', 'Failed to delete product');
        }
    }

    public function user()
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        $data['products'] = $model->where('status', 1)->findAll(); // get active products

        return view('user', $data); // pass $products to the user.php view
    }

    public function userProducts()
    {
        $model = new AdminModel();
        $model->tables('products', 'id', ['name', 'image', 'description', 'status']);

        // Get only active products to show on user page
        $data['products'] = $model->where('status', 1)->findAll();

        return view('user_products', $data);
    }

    public function achieverTours()
    {

    }

    public function tour()
    {
        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $data['tours'] = $model->findAll();
        return view('tour', $data);
    }

    public function addtour()
    {
        return view('add_tour');
    }

    public function inserttour()
    {
        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);

        $data = [
            'name'   => $this->request->getPost('name'),
            'team'   => $this->request->getPost('team'),
            'direct' => $this->request->getPost('direct'),
            'status' => $this->request->getPost('status'),
        ];

        // Image upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && ! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        $model->insert($data);
        return redirect()->to('tour');
    }

    public function deletetour($id)
    {
        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $model->delete($id);
        return redirect()->to('tour');
    }
    public function toggleStatus($id)
    {
        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);

        $tour = $model->find($id);
        if ($tour) {
            $newStatus = $tour['status'] === 'Active' ? 'Deactive' : 'Active';
            $model->update($id, ['status' => $newStatus]);
        }

        return redirect()->to('tour');
    }
    public function edittour($id)
    {
        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $data['tour'] = $model->find($id);
        return view('edit_tour', $data);
    }

    public function updatetour($id)
    {
        $model = new AdminModel();
        $model->tables('tour', 'id', ['name', 'image', 'team', 'direct', 'status']);

        $data = [
            'name'   => $this->request->getPost('name'),
            'team'   => $this->request->getPost('team'),
            'direct' => $this->request->getPost('direct'),
            'status' => $this->request->getPost('status'),
        ];

        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && ! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        $model->update($id, $data);
        return redirect()->to('tour');
    }
    public function awards()
    {
        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $data['awards'] = $model->findAll();
        return view('awards', $data);
    }
    public function addawards()
    {
        return view('add_awards');
    }

    public function insertawards()
    {
        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);

        $data = [
            'name'   => $this->request->getPost('name'),
            'team'   => $this->request->getPost('team'),
            'direct' => $this->request->getPost('direct'),
            'status' => $this->request->getPost('status'),
        ];

        // Image upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && ! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        $model->insert($data);
        return redirect()->to('awards');
    }

    public function deleteawards($id)
    {
        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $model->delete($id);
        return redirect()->to('awards');
    }

    public function toggleStatusawards($id)
    {
        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);

        $awards = $model->find($id);
        if ($awards) {
            $newStatus = $awards['status'] === 'Active' ? 'Deactive' : 'Active';
            $model->update($id, ['status' => $newStatus]);
        }

        return redirect()->to('awards');
    }
    public function editawards($id)
    {
        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);
        $data['award'] = $model->find($id);
        return view('edit_awards', $data);
    }

    public function updateawards($id)
    {
        $model = new AdminModel();
        $model->tables('awards', 'id', ['name', 'image', 'team', 'direct', 'status']);

        $data = [
            'name'   => $this->request->getPost('name'),
            'team'   => $this->request->getPost('team'),
            'direct' => $this->request->getPost('direct'),
            'status' => $this->request->getPost('status'),
        ];

        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && ! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads/', $newName);
            $data['image'] = $newName;
        }

        $model->update($id, $data);
        return redirect()->to('awards');
    }

}
