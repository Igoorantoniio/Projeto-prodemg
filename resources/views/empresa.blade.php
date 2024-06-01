<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empresa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/vue@next"></script>

</head>

<body>
<div id="v-model-basic" class="demo">
  <input v-model="message" placeholder="Me edite" />
  <p>A mensagem é: {{ message }}</p>
</div>
</body>

<script>
 Vue.createApp({
  data() {
    return {
      message: ''
    }
  }
}).mount('#v-model-basic')
</script>

<style> 
.demo {
  font-family: sans-serif;
  border: 1px solid #eee;
  border-radius: 2px;
  padding: 20px 30px;
  margin-top: 1em;
  margin-bottom: 40px;
  user-select: none;
  overflow-x: auto;
}
</style>

</html>