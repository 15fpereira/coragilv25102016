@extends('produtos.home')
@section('content')
    <link rel="stylesheet" type="text/css" href="../css/datatables/jquery.dataTables.min.css">
    <div class="dataTable_wrapper">
        <table id="dataTables">
            <thead>
            <tr>
                <th>Código:</th>
                <th>nome:</th>
                <th>Descrição:</th>
                <th>Ações:</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produtos as $produto)
                <tr class="odd gradeX">
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td class="center">
                        <div class="button-side">
                            <a href="#" class="btn-system border-btn btn-large"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#" class="btn-system border-btn btn-large btn-gray"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="javascript">
        $(document).ready(function(){
            $('#dataTables').DataTable();
        });
    </script>
    <script type="text/javascript" src="../js/datatables/dataTables.min.js"></script>
@endsection
