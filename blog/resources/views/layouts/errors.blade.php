@if(count($errors))
<div class="form-group">
  <div class="alert alert-danger  ">
    <ul>
      <?php foreach ($errors -> all() as $error): ?>
        {{ $error}}
      <?php endforeach; ?>
    </ul>
  </div>
</div>
@endif
