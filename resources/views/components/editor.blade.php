@props(['id', 'model', 'value'])
<div>
    <textarea data-description="@this" id="{{$id}}" class="form-control"
        cols="1009" rows="10">{!!$value!!}</textarea>
</div>
@push('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#{{$id}}' ) )
        .then( editor => {
                document.querySelector('#submit').addEventListener('click', function() {
                    let data =  $("#{{$id}}").data('description');
                    eval(data).set('{{$model}}', editor.getData());
                });
        } )
        .catch( error => {
                console.error( error );
        } );
</script>
@endpush