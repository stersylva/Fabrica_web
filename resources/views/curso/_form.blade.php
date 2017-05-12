{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', null) }}

{{ Form::label('instituicao', 'Instituicao') }}
{{ Form::select('instituicao', $instituicoes ,null) }}

{{ Form::label('duracao', 'Duracao') }}
{{ Form::text('duracao', null) }}


{{ Form::submit('Enviar') }}