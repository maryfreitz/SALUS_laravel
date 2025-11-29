<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastrar</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form action="{{ route('medicamentos.store') }}" method="POST"
          class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">
        @csrf
        @method('PUT')

        <h1 class="text-2xl font-bold text-gray-700 text-center">Cadastrar Família</h1>

        <div>
            <label class="block font-medium text-gray-600">Nome do Paciente</label>
            <input type="text" name="nome_paciente"
                value="{{ $medicamentoP->nome_paciente }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="EX: Maria" required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Medicamentos</label>
            <input type="text" name="medicamentos"
                value="{{ $medicamentoP->medicamentos }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="EX: Paracetamol, Ibuprofeno"
                required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Cartão do SUS (CPF)</label>
            <input type="text" name="cartaoSUS"
                value="{{ $medicamentoP->cartaoSUS }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="Ex: xxx.xxx.xxx-xx" required>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <script>
            $(document).ready(function(){

                $('[name="cartaoSUS"]').mask('000.000.000-00', {reverse: false});
            });
        </script>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Atualizar
        </button>
    </form>

</body>
</html>
