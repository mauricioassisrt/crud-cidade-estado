@extends('cabecalho')
<body>
<div class="card-body">

            <!-- /.box-header -->
                        @if(Request::is('*/editar/*'))
                        {!! Form::model($estado, ['method' => 'PATCH', 'url' => 'estados/update/'.$estado->id]) !!}
                        @else
                        {!! Form::open(['url' => 'estados/insert']) !!}
                        @endif
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Digite o nome ." name="nome" @if(Request::is('*/editar/*')) value="{{$estado->nome}}" @endif required>

                        </div>
                        <div class="form-group">
                            <label>Sigla</label>
                            <input type="text" class="form-control" placeholder="PR" id="sigla" name="sigla" @if(Request::is('*/editar/*')) value="{{$estado->sigla}}" @endif required>

                        </div>
            </div>
            <div class="card-footer clearfix">

                <a href="{{url('/estados')}}" class="btn btn-primary">

                    <i class="fas fa-arrow-left"></i> Voltar </a>

                @if(Request::is('*/editar/*'))
                <button type="submit" class="btn btn-success">  <i class=" fas fa-pen-alt"></i>  Alterar</button>
                @else
                <button type="submit" class="btn btn-success"> <i class=" fas fa-save"></i> Salvar</button>
                @endif

            </div>
            {!! Form::close() !!}
           </div>
</body>
@extends('rodape')
