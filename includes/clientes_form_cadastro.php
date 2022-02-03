<?php include 'bd.php'; ?>

<form method="POST" action="" autocomplete="off" enctype="multipart/form-data" class="pb-5">

    <fieldset class="mb-3">
        <legend>Dados Comerciais</legend>
        <div class="row mb-3">
            <div class="col">
                <div class="input-group input-group-sm">
                    <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Selecione uma Categoria...</option>
                        <?php
                        foreach ($arrCategoria as $key => $value) {
                            echo "<option value=" . ($key + 1) . ">" . $value . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <label class="input-group-text" for="inputGroupSelect01">Sub-Categoria</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Selecione uma Categoria...</option>
                        <?php
                        foreach ($arrSubCategoria as $key => $value) {
                            echo "<option value=" . ($key + 1) . ">" . $value . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Selecione o Tipo...</option>
                        <?php
                        foreach ($arrTipo as $key => $value) {
                            echo "<option value=" . ($key + 1) . ">" . $value . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <label class="input-group-text" for="inputGroupSelect01">Fase</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Selecione uma Fase...</option>
                        <?php
                        foreach ($arrFase as $key => $value) {
                            echo "<option value=" . ($key + 1) . ">" . $value . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefone</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-7">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Slogan</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Logo</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text">Keywords</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text">Copywriting</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Website</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">GMN-link</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row mb-3">

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Facebook_link</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Facebook_tag</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Instagram_link</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Instagram_tag</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="mb-3">
        <legend>Dados do Responsável</legend>
        <div class="row mb-3">
            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefone</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="mb-3">
        <legend>Observações</legend>
        <div class="row mb-3">
            <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text">Anotações</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
    </div>

</form>