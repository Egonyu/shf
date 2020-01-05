@extends('pages.master')

@section('content')
    <div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Names</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Zip</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Position</th>
                            <th scope="col">Employer</th>
                            <th scope="col">Talent</th>
                            <th scope="col">Field</th>
                            <th scope="col">Disabilit(S)</th>
                            <th scope="col">Emergency Contact</th>
                            </tr>
                        </thead>
                        @foreach ($volunteers as $volunteer)
                            <tbody style="font-size:12px">
                                <tr>
                                <th scope="row"> {{$volunteer->id}} </th>
                                <td> {{$volunteer->names}} </td>
                                <td> {{$volunteer->address}} </td>
                                <td> {{$volunteer->email}} </td>
                                <td> {{$volunteer->city}} </td>
                                <td> {{$volunteer->state}} </td>
                                <td> {{$volunteer->zip}} </td>
                                <td> {{$volunteer->phone}} </td>
                                <td> {{$volunteer->position}} </td>
                                <td> {{$volunteer->employer}} </td>
                                <td> {{$volunteer->special_talent}} </td>
                                <td> {{$volunteer->volunteering_field}} </td>
                                <td> {{$volunteer->physical_limitations}} </td>
                                <td> {{$volunteer->emgerncy_contact}} </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection