<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form action="{{ route('ControleV.update' , $controleV->id) }}" method="POST"
          class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>Erro!</strong>
                    <ul class="mt-2 list-disc ml-5">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
            </div>
        @endif

        <h1 class="text-2xl font-bold text-gray-700 text-center">Editar cadastro de vacinação</h1>

        <div>
            <label class="block font-medium text-gray-600">Nome do paciente</label>
            <input type="text" name="nome_paciente"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $controleV->nome_paciente }}"
                placeholder="EX: Maria" 
        </div>

        <div>
            <label class="block font-medium text-gray-600">Data da aplicação</label>
            <input type="date" name="data_aplicacao"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $controleV->data_aplicacao }}"
                
        </div>

        <div>
            <label class="block font-medium text-gray-600">Vacina aplicada</label>
            <input type="text" name="vacina"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $controleV->vacina }}"
                placeholder="Ex: Febre Amarela" 
        </div>

        <div>
            <label class="block font-medium text-gray-600">Responsável pela aplicação</label>
            <input type="text" name="responsavel"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ $controleV->responsavel }}"
                placeholder="Ex: Enfermeira Ana" 
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Atualizar
        </button>
    </form>

</body>
</html>
