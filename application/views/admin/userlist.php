<?php 
 require_once(APPPATH.'views/admin/include/header.php'); 
 require_once(APPPATH.'views/admin/include/body.php');
 require_once(APPPATH.'views/admin/include/navbar.php');
  
    
?>
    
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- users list start -->
<section class="users-list-wrapper">
    <div class="users-list-filter px-1">
        <form>
            <div class="row border border-light rounded py-2 mb-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-verified">Verified</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-verified">
                            <option value="">Any</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-role">Role</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-role">
                            <option value="">Any</option>
                            <option value="User">User</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-status">
                            <option value="">Any</option>
                            <option value="Active">Active</option>
                            <option value="Close">Close</option>
                            <option value="Banned">Banned</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                    <button class="btn btn-block btn-primary glow">Show</button>
                </div>
            </div>
        </form>
    </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="users-list-datatable" class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>username</th>
                                    <th>name</th>
                                    <th>last activity</th>
                                    <th>verified</th>
                                    <th>role</th>
                                    <th>status</th>
                                    <th>edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>300</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">dean3004</a>
                                    </td>
                                    <td>Dean Stanley</td>
                                    <td>30/04/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>301</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">zena0604</a>
                                    </td>
                                    <td>Zena Buckley</td>
                                    <td>06/04/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>302</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">delilah0301</a>
                                    </td>
                                    <td>Delilah Moon</td>
                                    <td>03/01/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>303</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">hillary1807</a>
                                    </td>
                                    <td>Hillary Rasmussen</td>
                                    <td>18/07/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>304</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">herman2003</a>
                                    </td>
                                    <td>Herman Tate</td>
                                    <td>20/03/2020</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>305</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">kuame3008</a>
                                    </td>
                                    <td>Kuame Ford</td>
                                    <td>30/08/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>306</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">fulton2009</a>
                                    </td>
                                    <td>Fulton Stafford</td>
                                    <td>20/09/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>307</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">piper0508</a>
                                    </td>
                                    <td>Piper Jordan</td>
                                    <td>05/08/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>308</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">neil1002</a>
                                    </td>
                                    <td>Neil Sosa</td>
                                    <td>10/02/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>309</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">caldwell2402</a>
                                    </td>
                                    <td>Caldwell Chapman</td>
                                    <td>24/02/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>310</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">wesley0508</a>
                                    </td>
                                    <td>Wesley Oneil</td>
                                    <td>05/08/2020</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>311</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">tallulah2009</a>
                                    </td>
                                    <td>Tallulah Fleming</td>
                                    <td>20/09/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>312</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">iris2505</a>
                                    </td>
                                    <td>Iris Maddox</td>
                                    <td>25/05/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>313</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">caleb1504</a>
                                    </td>
                                    <td>Caleb Bradley</td>
                                    <td>15/04/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>314</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">illiana0410</a>
                                    </td>
                                    <td>Illiana Grimes</td>
                                    <td>04/10/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>315</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">chester0902</a>
                                    </td>
                                    <td>Chester Estes</td>
                                    <td>09/02/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>316</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">gregory2309</a>
                                    </td>
                                    <td>Gregory Hayden</td>
                                    <td>23/09/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>317</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">jescie1802</a>
                                    </td>
                                    <td>Jescie Parker</td>
                                    <td>18/02/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>318</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">sydney3101</a>
                                    </td>
                                    <td>Sydney Cabrera</td>
                                    <td>31/01/2020</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>319</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">gray2702</a>
                                    </td>
                                    <td>Gray Valenzuela</td>
                                    <td>27/02/2020</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-warning">Close</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>320</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">hoyt0305</a>
                                    </td>
                                    <td>Hoyt Ellison</td>
                                    <td>03/05/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>321</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">damon0209</a>
                                    </td>
                                    <td>Damon Berry</td>
                                    <td>02/09/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>322</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">kelsie0511</a>
                                    </td>
                                    <td>Kelsie Dunlap</td>
                                    <td>05/11/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-warning">Close</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>323</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">abel1606</a>
                                    </td>
                                    <td>Abel Dunn</td>
                                    <td>16/06/2020</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>324</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">nina2208</a>
                                    </td>
                                    <td>Nina Byers</td>
                                    <td>22/08/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-warning">Close</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>325</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">erasmus1809</a>
                                    </td>
                                    <td>Erasmus Walter</td>
                                    <td>18/09/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>326</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">yael2612</a>
                                    </td>
                                    <td>Yael Marshall</td>
                                    <td>26/12/2016</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-warning">Close</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>327</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">thomas2012</a>
                                    </td>
                                    <td>Thomas Dudley</td>
                                    <td>20/12/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>328</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">althea2810</a>
                                    </td>
                                    <td>Althea Turner</td>
                                    <td>28/10/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>329</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">jena2206</a>
                                    </td>
                                    <td>Jena Schroeder</td>
                                    <td>22/06/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>330</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">hyacinth2201</a>
                                    </td>
                                    <td>Hyacinth Maxwell</td>
                                    <td>22/01/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>331</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">madeson1907</a>
                                    </td>
                                    <td>Madeson Byers</td>
                                    <td>19/07/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>332</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">elmo0707</a>
                                    </td>
                                    <td>Elmo Tran</td>
                                    <td>07/07/2020</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>333</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">shelley0309</a>
                                    </td>
                                    <td>Shelley Eaton</td>
                                    <td>03/09/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>334</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">graham0301</a>
                                    </td>
                                    <td>Graham Flores</td>
                                    <td>03/01/2019</td>
                                    <td>No</td>
                                    <td>Staff</td>
                                    <td><span class="badge badge-danger">Banned</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td>335</td>
                                    <td><a
                                            href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-view.html">erasmus2110</a>
                                    </td>
                                    <td>Erasmus Mclaughlin</td>
                                    <td>21/10/2019</td>
                                    <td>Yes</td>
                                    <td>User </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html"><i
                                                class="ft-edit-1"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- users list ends -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-danger box-shadow-3" href="#"><i class="ft-settings font-medium-3 spinner white"></i></a><div class="customizer-content p-2">
	<h4 class="text-uppercase mb-0">Theme Customizer</h4>
	<hr>
	<p>Customize & Preview in Real Time</p>
	<h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
	<div class="form-group">
		<!-- Outline Button group -->
		<div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
			<button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
		</div>
	</div>
	<hr>
	<h5 class="mt-1 text-bold-500">Layout Options</h5>
	<ul class="nav nav-tabs nav-underline nav-justified layout-options">
		<li class="nav-item">
			<a class="nav-link layouts active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21" href="#tabIcon21" aria-expanded="true">Layouts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link navigation" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22" href="#tabIcon22" aria-expanded="false">Navigation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link navbar" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23" href="#tabIcon23" aria-expanded="false">Navbar</a>
		</li>
	</ul>
	<div class="tab-content px-1 pt-1">
		<div role="tabpanel" class="tab-pane active" id="tabIcon21" aria-expanded="true" aria-labelledby="baseIcon-tab21">
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="collapsed-sidebar" id="collapsed-sidebar">
				<label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
				<label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
				<label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
				<label class="custom-control-label" for="static-layout">Static Layout</label>
			</div>
		</div>
		<div class="tab-pane" id="tabIcon22" aria-labelledby="baseIcon-tab22">
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
				<label class="custom-control-label" for="native-scroll">Native Scroll</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="right-side-icons" id="right-side-icons">
				<label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="bordered-navigation" id="bordered-navigation">
				<label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="flipped-navigation" id="flipped-navigation">
				<label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="collapsible-navigation" id="collapsible-navigation">
				<label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="static-navigation" id="static-navigation">
				<label class="custom-control-label" for="static-navigation">Static Navigation</label>
			</div>
		</div>
		<div class="tab-pane" id="tabIcon23" aria-labelledby="baseIcon-tab23">
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
				<label class="custom-control-label" for="brand-center">Brand Center</label>
			</div>
			<div class="custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input" name="navbar-static-top" id="navbar-static-top">
				<label class="custom-control-label" for="navbar-static-top">Static Top</label>
			</div>
		</div>
	</div>
	<hr>
	<h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
	<ul class="nav nav-tabs nav-underline nav-justified color-options">
		<li class="nav-item w-100">
			<a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1" href="#clrOpt1" aria-expanded="false">Semi Light</a>
		</li>
		<li class="nav-item  w-100">
			<a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2" href="#clrOpt2" aria-expanded="false">Semi Dark</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="#clrOpt3" aria-expanded="false">Dark</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="#clrOpt4" aria-expanded="true">Light</a>
		</li>
	</ul>
	<div class="tab-content px-1 pt-1">
		<div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true" aria-labelledby="color-opt-1">
			<div class="row">
				<div class="col-6">
					<h6>Solid</h6>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default">
						<label class="custom-control-label" for="default">Default</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="primary">
						<label class="custom-control-label" for="primary">Primary</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="danger">
						<label class="custom-control-label" for="danger">Danger</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-success" id="success">
						<label class="custom-control-label" for="success">Success</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="blue">
						<label class="custom-control-label" for="blue">Blue</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan">
						<label class="custom-control-label" for="cyan">Cyan</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="pink">
						<label class="custom-control-label" for="pink">Pink</label>
					</div>
				</div>
				<div class="col-6">
					<h6>Gradient</h6>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue">
						<label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
						<label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
						<label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
						<label class="custom-control-label" for="bg-gradient-x-success">Success</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
						<label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
						<label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
						<label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default">
				<label class="custom-control-label" for="opt-default">Default</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary">
				<label class="custom-control-label" for="opt-primary">Primary</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger">
				<label class="custom-control-label" for="opt-danger">Danger</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="opt-success">
				<label class="custom-control-label" for="opt-success">Success</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue">
				<label class="custom-control-label" for="opt-blue">Blue</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan">
				<label class="custom-control-label" for="opt-cyan">Cyan</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink">
				<label class="custom-control-label" for="opt-pink">Pink</label>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
			<div class="row">
				<div class="col-6">
					<h3>Solid</h3>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey">
						<label class="custom-control-label" for="solid-blue-grey">Default</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary">
						<label class="custom-control-label" for="solid-primary">Primary</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger">
						<label class="custom-control-label" for="solid-danger">Danger</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="solid-success">
						<label class="custom-control-label" for="solid-success">Success</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue">
						<label class="custom-control-label" for="solid-blue">Blue</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan">
						<label class="custom-control-label" for="solid-cyan">Cyan</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink">
						<label class="custom-control-label" for="solid-pink">Pink</label>
					</div>
				</div>

				<div class="col-6">
					<h3>Gradient</h3>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1">
						<label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1">
						<label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1">
						<label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success1">
						<label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
						<label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
						<label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
						<label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
				<label class="custom-control-label" for="light-blue-grey">Default</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary">
				<label class="custom-control-label" for="light-primary">Primary</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger">
				<label class="custom-control-label" for="light-danger">Danger</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success">
				<label class="custom-control-label" for="light-success">Success</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue">
				<label class="custom-control-label" for="light-blue">Blue</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan">
				<label class="custom-control-label" for="light-cyan">Cyan</label>
			</div>
			<div class="custom-control custom-radio mb-1">
				<input type="radio" name="nav-light-clr" class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink">
				<label class="custom-control-label" for="light-pink">Pink</label>
			</div>
		</div>
	</div>
</div>
    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/modern_admin" target="_blank" class="btn btn-info btn-glow round px-2">Buy Now</a>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php require_once(APPPATH.'views/admin/include/footer.php'); ?>