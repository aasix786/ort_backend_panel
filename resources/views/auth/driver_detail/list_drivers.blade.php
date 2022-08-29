



@extends('layouts.app')
@section('title', 'ORT title')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Drivers</strong> </h1>








            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">List of Drivers</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">First Name</th>
                                <th class="d-none d-xl-table-cell">Last Name</th>
                                <th>License #</th>
                                <th class="d-none d-xl-table-cell">Email</th>

                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="d-none d-xl-table-cell">John</td>
                                <td class="d-none d-xl-table-cell">Wick</td>
                                <td><span class="badge bg-success">#5278524</span></td>
                                <td class="d-none d-xl-table-cell">johnwick@gmail.com </td>
                                <td class="d-none d-md-table-cell" ><a href="list_drivers.blade.php"  role="button" class="btn btn-success">View details</a></td>
                            </tr>

                            <tr>
                                <td class="d-none d-xl-table-cell">Yunnick</td>
                                <td class="d-none d-xl-table-cell">Zengi</td>
                                <td><span class="badge bg-success">#785524</span></td>
                                <td class="d-none d-xl-table-cell">yunnick@gmail.com </td>
                                <td class="d-none d-md-table-cell"><button type="button" class="btn btn-success">View details</button></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>



    </main>
@endsection










