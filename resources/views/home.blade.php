@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">¿En qué estás pensando ahora?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="">
                        <div class="form-group">
                            <label for="">Ahora estoy pensando en:</label>
                            <input type="text" class="form-control" name="thought">
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">Publicado en 17/07/2019</div>

                <div class="card-body">
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate culpa, nihil eum sequi impedit? Quibusdam atque inventore earum unde. Non est assumenda doloremque dignissimos quisquam vel quae minus recusandae.</P>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
