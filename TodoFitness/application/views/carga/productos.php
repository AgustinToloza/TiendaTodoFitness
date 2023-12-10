
    <section class="form_carga">
        <h3 class="text-center">Carga de Productos</h3><br><br>
        
    <div id="formu_aric">
      
       <form class="row g-3" action="<?= base_url(); ?>Cargar/GrabarProducto" method="POST" align-items-center enctype="multipart/form-data">

            <input type="text" name="nombre" placeholder="Nombre del artículo" required maxlength="100"><br><br>
            <input type="text" name="descripcion" placeholder="Descripción"  maxlength="200"><br><br>
            <input type="text" name="stock" placeholder="Stock"  maxlength="100"><br><br>
            <input type="text" name="precio" placeholder="Precio" required maxlength="10"><br><br>
            <input type="file" name="imagen" placeholder="Imagen" required>
            <input type="submit" value="Cargar producto" class="btn btn-dark">
        </form>
    </div>
    </section>
    
</body>
</html>