<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form action="{{ route('Visita.update' , $VisitaD->id) }}" method="POST"
          class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">
        @csrf
        @method('PUT')

        <h1 class="text-2xl font-bold text-gray-700 text-center">Editar Visita</h1>

        <div>
            <label class="block font-medium text-gray-600">Nome</label>
            <input type="text" name="nome"
                value="{{ $VisitaD->nome }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="EX: Ana" required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Motivo da Visita</label>
            <input type="text" name="motivo_visita"
                value="{{ $VisitaD->motivo_visita }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="Ex: Acompanhamento de Gestante" required>
                
        </div>

        <div>
            <label class="block font-medium text-gray-600">Data da Visita</label>
            <input type="date" name="data"
                value="{{ $VisitaD->data }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                required>
        </div>

        <div>
            <label class="block font-medium text-gray-600">Agente Responsável</label>
            <input type="text" name="agente"
                value="{{ $VisitaD->agente }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="Ex: Agente João" required>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Atualizar
        </button>
    </form>

</body>
</html>
