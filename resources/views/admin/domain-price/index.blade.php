@extends('base::default.index')

@section('model')
    <?= Base::gridView([
            'model' => $model,
            'models' => $models,
            'attributes' => [
                'tld',
                'price_mx',
                'price_usd',
                'main',
            ]
        ]) ?>
@endsection
