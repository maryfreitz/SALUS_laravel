<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastrar</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form action="{{ route('BolsaF.store') }}" method="POST"
          class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">
        @csrf

        <h1 class="text-2xl font-bold text-gray-700 text-center">Cadastrar no Bolsa Família</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                <ul class="list-disc ml-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label class="block font-medium text-gray-600">Nome</label>
            <input type="text" name="nome_familia"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="EX: Maria" value="{{ old('nome_familia') }}">
        </div>

        <div>
            <label class="block font-medium text-gray-600">Data de Nascimento</label>
            <input type="date" name="nascimento"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                value="{{ old('nascimento') }}">
        </div>

        <div>
            <label class="block font-medium text-gray-600">Altura (cm)</label>
            <input type="number" min="1" max="250" name="altura"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="Ex: 164" value="{{ old('altura') }}">
        </div>

        <div>
            <label class="block font-medium text-gray-600">Peso (kg)</label>
            <input type="number" min="1" max="300" name="peso"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300"
                placeholder="Ex: 56" value="{{ old('peso') }}">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Cadastrar
        </button>
    </form>

</body>
</html>
