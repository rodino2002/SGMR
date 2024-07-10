
<!--===============login===============-->
      <div class="container  col-lg-8" style="margin-top:10%;"> 
        <div class="row">
         <div class="col-sm-7  container" style="margin-top: 7%;" >
             <h3 align="center" style="padding: 0px 0px 20px 0px; color: csc;">Você já possui uma Conta?</h3>
             <form id="login" method="post" action="">
             <div class="form-group">
                 <input type="text" class="form-control" id="nome" name="usuario" placeholder=" Digite o seu Nome completo">
             </div>
             <div class="form-group">
                 <input type="password" class="form-control" id="senha" name="senha" placeholder=" Digite a sua senha">
             </div>

             <button type="submit" class="btn btn-primary" style="align:right; width: 100%;" id="entrar">Entrar</button>
             <input type="reset" value="Limpar" class="btn btn-warning">

             </form>
          </div>   
        </div>
    </div>
<!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
  Abrir modal de demonstração
</button>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>


<!--SCRIPTS js-->
			<script src="bootstrap-4/js/jquery.js"></script>
            <script>
				$(document).on('click', 'ul#menu li', function(){
					$(this).addClass('active').siblings().removeClass('active')
				})
			</script>
           
            <script src="bootstrap-4/js/all.js"></script>
            <script src="bootstrap-4/js/owl.carousel.min.js"></script>
        </body>
   </html>

