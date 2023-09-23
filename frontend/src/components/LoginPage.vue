<script setup>

</script>

<template id="login">
<div id="wapper">
      <div class="auth-background"></div>
      <div class="panel-auth">
        <h2> Acidiney <span>Dias</span></h2>
        <p style="text-align:center; margin-top: 0"><small>Entre usando sua conta</small></p>
        <form action="#">
          <label for="">
            Username:</label>
        <div class="input-group">
          <i class="fa fa-user"></i><input type="text" name="username" placeholder="Simple text">
        </div>
          <label for="">
            Password:
          </label>
          <div class="input-group">
            <i class="fa fa-unlock"></i><input type="password" name="password" placeholder="Simple text">
          </div>
          <aside class="col">
            <a href="#"> Esqueci a senha </a>
            <label for="">
              <input type="checkbox" name="remember"> <small> Lembrar senha </small>
            </label>
          </aside>
          <button type="submit" class="button"> Entrar </button>
        </form>
      </div>
    </div>
</template>

<style scoped>

</style>