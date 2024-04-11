<h1 class="nombre-pagina">Login</h1>

<p class="descripcion-pagina">Inicia Sesión con tus datos</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" placeholder="Tu Correo" id="email" name="email" value="<?php echo s($auth->email); ?>">
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Tu Contraseña" id="password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>