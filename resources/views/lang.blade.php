<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select class="form-select changeLang" aria-label="Default select example">
    <option selected>زبان مورد نظر را انتخاب کنید </option>
    <option value="en" {{session()->get('local')== 'en'?'selected':''}}>انگلیسی</option>
    <option value="fr" {{session()->get('local')== 'fr'?'selected':''}}>عربی</option>
    <option value="es" {{session()->get('local')== 'es'?'selected':''}}>روسی</option>
</select>

<h3>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('welcome to my house', app()->getLocale())}}</h3>
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    var url = "{{ route('lang.change') }}";
    $('.changeLang').change(function(event){
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
</body>
</html>
