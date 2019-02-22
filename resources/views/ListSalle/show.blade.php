
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Group</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('groupes.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of Group:</strong>
                {{ $groupes->libelleGroupe }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Capacity:</strong>
                {{ $groupes->capacite }}
            </div>
        </div>
    </div>
@endsection