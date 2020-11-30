@extends('cabecalho')
<script type="text/javascript">
    function deletardados(e) {
        if (!(window.confirm("Tem certeza que deseja excluir esse usuario?")))
            e.returnValue = false;
    }

</script>

<body>

    <a href="{{ url('/estados/cadastrar') }}" class="btn btn-primary float-right">
        <i class="fas fa-plus"></i> Novo </a>

    <div class="card-body">
        <table class="table table-hover text-nowrap">

            <thead>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        Sigla
                    </th>
                    <th>
                        Ações
                    </th>

                </tr>
            </thead>
            <tbody>


                @foreach ($estados as $estado)
                    <tr>
                        <td>{{ $estado->id }}</td>
                        <td>
                            {{ $estado->nome }}
                        </td>
                        <td>
                            {{ $estado->sigla }}
                        </td>
                        <td>

                            <a href="{{ url('estados/editar/' . $estado->id) }}" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-pencil">
                                </span>
                                <i class="fas fa-edit"></i> Editar </a>
                            <a href="{{ url('estados/deletar/' . $estado->id) }}" class="btn btn-primary"
                                onclick="return deletardados(event)"><span class="glyphicon glyphicon-remove"></span> <i
                                    class="fas fa-trash"></i> Excluir
                            </a>
                            </a>

                        </td>

                    </tr>

                @endforeach


            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">

        {{ $estados->links() }}

    </div>


</body>
@extends('rodape')
