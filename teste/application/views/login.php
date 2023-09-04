
    <div class='row' style='margin: 0; height: 100vh; background-color: #4c1a3f; color: white; overflow-x: hidden;'>
        <div class='col-12 text-center d-flex align-items-center' style='flex-flow: row wrap; width: 105vw; max-width: 105vw;'>
            <div class='row' style='flex: 0 0 100%'>
                <div class='col-12'>
                    <img class="img-fluid" src='https://www.manwich.com/sites/g/files/qyyrlu376/files/images/logos/MAN_GLO_HDR_Logo.png'>
                    <br>
                </div>

                <div class='col-12'>
                <?php if($err != null && $err == 1){ ?>
                    <p class="text-danger" style='font-weight: bold'>E-mail ou Senha inválidos!</p>
                <?php } ?>
                <form action='<?php echo base_url('logar') ?>' method='post'>
                    <label class="form-label">E-mail</label><br>
                    <input type='email' name='email' id='email' placeholder='E-mail' class="form-control" style='width: 200px; display: inline; margin: 0;'>
                    <br><br>
                    <label class="form-label">Senha</label><br>
                    <input type='password' name='senha' id='senha' placeholder='*****' class="form-control" style='width: 200px; display: inline; margin: 0;'>
                    <br><br>
                    <input type='submit' value='Logar' class='btn btn-primary' style='width: 200px; background-color: #98317f; border-color: #73265f'>
                </form>
                </div>
            </div>
        </div>
    </div>

	