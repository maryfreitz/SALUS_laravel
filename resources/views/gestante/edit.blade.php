<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form action="{{ route('gestante.update' , $gestanteC->id) }}" method="POST"
          class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">
        @csrf
        @method('PUT')

        <h1 class="text-2xl font-bold text-gray-700 text-center">Editar Cadastro Gestante</h1>

        <div>
            <label class="block font-medium text-gray-600">Nome da gestante</label>
            <input type="text" name="nome_gestante"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $gestanteC->nome_gestante }}"
                placeholder="EX: Maria" required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Idade gestacional (semanas)</label>
            <input type="number" name="idade_gestacao"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $gestanteC->idade_gestacao }}"
                placeholder="Ex: 28" required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Data prevista do parto</label>
            <input type="date" name="data_prevista_parto"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $gestanteC->data_prevista_parto }}"
                required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Responsável pelo acompanhamento</label>
            <input type="text" name="responsavel_acompanhamento"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $gestanteC->responsavel_acompanhamento }}"
                placeholder="Ex: Enfermeira Ana" required>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Atualizar
        </button>
    </form>

</body>
</html>
