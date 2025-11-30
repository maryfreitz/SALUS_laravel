<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Salus</title>

    <!-- CDN do Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#b7e3f1]">

    <form action="{{ route('logout') }}" method="POST" class="absolute left-4 mb-10 mt-10">
        @csrf
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
            Logout
        </button>
    </form>

    <!-- Topo -->
    <header class="w-full bg-[#1e6f97] py-4 flex justify-center">
        <div class="flex flex-col items-center">
            <img src="Imagens/logoBranca.png" alt="Logo Salus" class="h-20  mb-1">
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="flex flex-col items-center mt-20 gap-10">

        <!-- Primeira linha de botões -->
        <div class="flex gap-10">
            <a href="{{ route('Visita.index') }}"
               class="bg-[#1e6f97] text-white px-10 py-4 rounded-lg shadow-lg text-center text-lg font-medium hover:scale-105 transition">
               CRUD VISITA <br> DOMICILIAR
            </a>

            <a href="{{ route('BolsaF.index') }}" class="bg-[#1e6f97] text-white px-10 py-4 rounded-lg shadow-lg text-center text-lg font-medium hover:scale-105 transition">
               CRUD BOLSA <br> FAMÍLIA
            </a>

            <a href="{{ route('medicamentos.index') }}"
               class="bg-[#1e6f97] text-white px-10 py-4 rounded-lg shadow-lg text-center text-lg font-medium hover:scale-105 transition">
               CRUD <br> PSICÓLOGO
            </a>
        </div>

        <!-- Segunda linha de botões -->
        <div class="flex gap-10">
            <a href="{{ route('ControleV.index') }}"
               class="bg-[#1e6f97] text-white px-10 py-4 rounded-lg shadow-lg text-center text-lg font-medium hover:scale-105 transition">
               CRUD CONTROLE <br> DE VACINAÇÃO
            </a>

            <a href="{{ route('gestante.index') }}"
               class="bg-[#1e6f97] text-white px-10 py-4 rounded-lg shadow-lg text-center text-lg font-medium hover:scale-105 transition">
               CRUD <br> GESTANTES
            </a>
        </div>

    </main>

</body>
</html>

