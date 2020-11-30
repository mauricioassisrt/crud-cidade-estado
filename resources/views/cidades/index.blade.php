@extends('cabecalho')


<script type="text/javascript">
    function deletardados(e) {
        if (!(window.confirm("Tem certeza que deseja excluir esse usuario?")))
            e.returnValue = false;
    }

</script>

<body>
    <div class="card-body">

        <div class="row">
            <a href="{{ url('/cidades/cadastrar') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i> Novo </a>
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


                    @foreach ($cidades as $cidade)
                        <tr>
                            <td>{{ $cidade->id }}</td>
                            <td>
                                {{ $cidade->nome }}
                            </td>
                            <td>
                                {{ $cidade->estados()->first()->sigla }}
                            </td>
                            <td>
                                <a href="{{ url('cidades/editar/' . $cidade->id) }}" class="btn btn-primary"><span
                                        class="glyphicon glyphicon-pencil">
                                    </span>
                                    <i class="fas fa-edit"></i> Editar </a>
                                <a href="{{ url('cidades/deletar/' . $cidade->id) }}" class="btn btn-primary"
                                    onclick="return deletardados(event)"><span
                                        class="glyphicon glyphicon-remove"></span> <i class="fas fa-trash"></i> Excluir
                                </a>
                                </a>

                            </td>

                        </tr>

                    @endforeach


                </tbody>

            </table>
        </div>
        <div class="card-footer clearfix">
            {{ $cidades->links() }}
        </div>
    </div>

    </div>
    <!-- /.card-body -->
    </div>



</body>
@extends('rodape')
