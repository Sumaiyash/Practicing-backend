@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class=" p-4 ms-5 text-center">
                <a href="{{ route('home') }}" class="btn btn-info fw-bold fs-3  ms-3 text-white text-decoration-none">Back</a>
                <a href="{{ route('priceTypes.create') }}" class="btn btn-primary fw-bold fs-3 ms-3 text-decoration-none "> Create New Price Type </a>
            </div>
            <div class="row">
                <table class="table ms-5 table table-success table-striped bg-white border border-warning p-5">
                    <thead>
                        <tr>
                            <th>Price Type Name</th>
                            <th class="text-center no-sort">Actvie Status</th>
                            <th  class=" text-end">Action</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($priceTypes as $priceType)
                        <tr>
                            <td>{{$priceType->name}}</td>
                            <td class="text-center">
                               <form action="{{ route('priceTypes.changeStatus', $priceType->id) }}" method="post">
                                 @csrf
                                 @method('GET')
                                    @if ($priceType->is_active == 1)
                                        <button type="submit" class="btn btn-success">Active</button>
                                    @else
                                        <button type="submit" class="btn btn-danger">Inactive</button>
                                    @endif
                                </form>
                            </td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <a href="{{ route('priceTypes.show', $priceType->id) }}" 
                                        class="btn btn-primary me-1"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('priceTypes.edit', $priceType->id) }}"
                                            class="btn btn-info me-1"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('priceTypes.destroy', $priceType->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to move this category to trashed ?')" title="Move to Trashed">
                                                    <i class="fa fa-trash"></i></button>
                                            </form> 
                                </div> 
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

