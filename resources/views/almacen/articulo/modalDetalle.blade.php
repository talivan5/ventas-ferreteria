<div class="modal fade" id="modal-detalle-{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="detalle" aria-hidden="true">
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
								<label for="staticEmail" class="col-sm-2 col-form-label">Poducto</label>
								<div class="col-sm-10">
									<img src="{{$art->imagen}}" alt="{{$art->nombre}}" height="500" width="500" class="img-thumbnail">
								</div>
							</div>	
						</div>
						<div class="col col-6">
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Poducto</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="{{$art->nombre}}" value="{{$art->nombre}}">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="{{$art->stock}}" value="{{$art->stock}}  Bs.">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="{{$art->descripcion}}" value="{{$art->descripcion}}">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Codigo</label>
								<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="{{$art->codigo}}" value="{{$art->codigo}}">
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