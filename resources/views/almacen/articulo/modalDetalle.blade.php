<style>
	.inner {
	  overflow: hidden;
  }
  
  .inner img {
	  transition: all 1s ease;
  }
  
  .inner:hover img {
	  transform: scale(1.5);
  }
</style>
<div class="modal fade" id="modal-detalle-@{{articulo.id}}" tabindex="-1" role="dialog" aria-labelledby="detalle" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalCenterTitle">Datos del Producto</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
					<div class="row">
						<div class="col col-6">
							<div class="form-group row">								
								<div class="inner">
									<img class="card-img-top" :src="'imagenes/articulos/'+ articulo.imagen" alt="@{{articulo.nombre}}" height="500" width="500" class="img-thumbnail">
								</div>
							</div>	
						</div>
						<div class="col col-6">
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Poducto</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="@{{articulo.nombre}}" value="@{{articulo.nombre}}">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="@{{articulo.stock}}" value="@{{articulo.stock}}  Bs.">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
								<div class="col-sm-10">
								<textarea readonly style="height: 200px;" class="form-control-plaintext">@{{articulo.descripcion}}</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Codigo</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" value="@{{articulo.codigo}}">
								</div>
							</div>
						</div>	
					</div>													
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>