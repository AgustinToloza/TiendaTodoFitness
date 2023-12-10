
    <section class="form_carga">
        <h3 class="text-center">Carga de Usuarios</h3><br><br>
        
    <div id="formu_aric">
      
       <form class="row g-3" action="<?= base_url(); ?>Cargar/GrabarUsuario" method="POST" align-items-center>

            <input type="text" name="nombre" placeholder="Nombre" required maxlength="100"><br><br>
            <input type="text" name="apellido" placeholder="Apellido"  maxlength="200"><br><br>
            <input type="text" name="dni" placeholder="DNI"  maxlength="100"><br><br>
            <input type="submit" value="Cargar usuario" class="btn btn-dark">
        </form>
    </div>
    </section>
    
</body>
</html>