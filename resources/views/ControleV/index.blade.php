<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Controle de Vacinação</title>
</head>
<body class="bg-gray-100 min-h-screen p-6">

        <a href="{{ route('dashboard') }}"
            class="inline-block mt-6 bg-[#1363ae] text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition">
            ← Tela Inicial
        </a>

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold text-gray-700 mb-6">Controle de Vacinação</h1>

        <a href="{{ route('ControleV.create') }}"
           class="inline-block mb-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
            + Cadastrar Novo
        </a>

        <ul class="space-y-4">
            @foreach ($controleV as $controle)
            <li class="bg-gray-50 p-4 rounded-lg shadow flex justify-between items-center">
                <div>
                    <p class="text-lg font-semibold text-gray-800">{{ $controle->nome_paciente }}</p>
                    <p class="text-gray-600 text-sm">Vacina: {{ $controle->vacina }}</p>
                    <p class="text-gray-600 text-sm">Data: {{ $controle->data_aplicacao }}</p>
                    <p class="text-gray-600 text-sm">Responsável: {{ $controle->responsavel }}</p>
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('ControleV.edit', $controle->id) }}"
                       class="text-blue-600 font-medium hover:underline">
                        Editar
                    </a>

                    <form action="{{ route('ControleV.destroy', $controle->id) }}"
                          method="POST" onsubmit="return confirm('Tem certeza?')">
                        @csrf
                        @method("delete")
                        <button class="text-red-600 font-medium hover:underline">
                            Excluir
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>

    </div>

</body>
</html>
