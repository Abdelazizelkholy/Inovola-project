@extends('layouts.master')
@section('content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>#ID</th>
            <th>title</th>
            <th>Content</th>
            <th>Rating

                <form action="/latestNews" method="get">
                    <i class="fas fa-sort"></i>
                    <input name="rateAsc" type="submit" value="asc">
                    <input name="rateDsc" type="submit" value="dec">
                </form>
            </th>
            <th>Agency</th>
            <th>
                Date
                <form action="/latestNews" method="get">
                    <i class="fas fa-sort"></i>
                    <input name="asc" type="submit" value="Asc">
                    <input name="dsc" type="submit" value="DESC">
                </form>

            </th>
        </tr>
        @foreach ($news as $new)
            <tr>
                <td> {{ $new->id  }} </td>
                <td> {{ $new->title  }} </td>
                <td> {{ substr($new->content , 0 ,50)  }} </td>
                <td> {{ $new->rating  }}</td>
                <td> {{ $new->agency->name  }}</td>
                <td> {{ \Carbon\Carbon::parse($new->created_at)->format('D M Y') }}</td>
            </tr>
        @endforeach
    </table>
@endsection