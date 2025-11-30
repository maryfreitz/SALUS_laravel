<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form action="{{ route('BolsaF.update', $bolsaF->id) }}" method="POST"
          class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">
        @csrf
        @method('PUT')

        <h1 class="text-2xl font-bold text-gray-700 text-center">Editar Cadastro do Bolsa Família</h1>

        <div>
            <label class="block text-gray-600 font-medium">Nome</label>
            <input type="text" name="nome_familia"
                value="{{ $bolsaF->nome_familia }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                required>
        </div>

        <div>
            <label class="block text-gray-600 font-medium">Data de Nascimento</label>
            <input type="date" name="nascimento"
                value="{{ $bolsaF->nascimento }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                required>
        </div>

        <div>
            <label class="block text-gray-600 font-medium">Altura (cm)</label>
            <input type="number" name="altura" value="{{ $bolsaF->altura }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                required>
        </div>

        <div>
            <label class="block text-gray-600 font-medium">Peso (kg)</label>
            <input type="number" name="peso" value="{{ $bolsaF->peso }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                required>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Atualizar
        </button>
    </form>

</body>
</html>
