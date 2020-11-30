@extends('cabecalho')


    <div class="card-body">

        <!-- /.box-header -->
        @if(Request::is('*/editar/*'))
        {!! Form::model($cidade, ['method' => 'PATCH', 'url' => 'cidades/update/'.$cidade->id]) !!}
        @else
        {!! Form::open(['url' => 'cidades/insert']) !!}
        @endif
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome ." name="nome"
            @if(Request::is('*/editar/*')) value="{{$cidade->nome}}" @endif required>

        </div>
        <div class="form-group">
            <label for="">Cidade</label>
            <select name="estado_id" id=""  class="form-control" >
                @if(Request::is('*/editar/*'))
                <option value="{{$cidade->estados()->first()->id}}">
                    {{$cidade->estados()->first()->nome}}
                </option>
                @foreach($estados as $estado)
                @if($cidade->estados()->first()->id != $estado->id )
                <option value="{{$estado->id}}" >
                    {{$estado->nome}}
                </option>
                @endif

                @endforeach
                @else
                @foreach($estados as $estado)
                <option value="{{$estado->id}}">
                    {{$estado->nome}}
                </option>
                @endforeach
                @endif

            </select>
        </div>





    </div>
    <div class="card-footer clearfix">

        <a href="{{url('/cidades')}}" class="btn btn-primary">

            <i class="fas fa-arrow-left"></i> Voltar </a>

        @if(Request::is('*/editar/*'))
        <button type="submit" class="btn btn-success"> <i class=" fas fa-pen-alt"></i> Alterar</button>
        @else
        <button type="submit" class="btn btn-success"> <i class=" fas fa-save"></i> Salvar</button>
        @endif

    </div>
    {!! Form::close() !!}
    </div>
</body>
@extends('rodape')
