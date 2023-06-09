<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body>

<form id="meuForm" method="POST">
    @csrf
    <input type="number" name="campo1" class="campo" required>
    <input type="number" name="campo2" class="campo" required>
    <input type="number" name="campo3" class="campo" required>
    <input type="number" name="campo4" class="campo" required>

    <input type="text" id="soma" readonly>
</form>

<script>
    $(document).ready(function() {
        $('.campo').change(function() {
            $.ajax({
                url: '{{ route('calcular-soma') }}',
                type: 'POST',
                data: $('#meuForm').serialize(),
                success: function(data) {
                    var soma = data.soma;
                    $('#soma').val(soma);

                    if (soma == 12) {
                        $('#soma').removeClass('vermelho');
                        $('#soma').addClass('laranja');
                    } else if (soma > 12) {
                        $('#soma').removeClass('vermelho');
                        $('#soma').removeClass('laranja');
                    } else {
                        $('#soma').removeClass('laranja');
                        $('#soma').addClass('vermelho');
                    }
                }
            });
        });
    });
</script>

<style>
    .vermelho {
        color: red;
    }

    .laranja {
        color: orange;
    }
</style>
</body>
