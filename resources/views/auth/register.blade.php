<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro — Salus</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #bfe3f0; 
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-8">

    <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center">


        <div class="space-y-6">

            <h1 class="text-5xl font-bold text-[#0a2a3d] leading-tight">
                Crie sua conta
            </h1>

            <p class="text-[#0a2a3d] opacity-70 text-lg">
                É rápido, fácil e você terá acesso ao sistema completo!
            </p>

            @if ($errors->any())
                <div class="bg-red-100 text-red-800 p-3 rounded-md">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf


                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    class="w-full px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 outline-none"
                    value="{{ old('email') }}"
                    required
                />

                <input
                    type="password"
                    name="password"
                    placeholder="Senha"
                    class="w-full px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 outline-none"
                    required
                />


                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirmar senha"
                    class="w-full px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 outline-none"
                    required
                />

                <button type="submit"
                    class="px-8 py-2 rounded-md bg-[#1f5d85] text-white font-semibold hover:bg-[#174a6b] transition">
                    Cadastrar
                </button>

                <p class="text-sm text-[#0a2a3d] opacity-70 mt-2">
                    Já possui uma conta?
                    <a href="{{ route('login') }}" class="text-blue-700 font-medium hover:underline">
                        Entrar
                    </a>
                </p>
            </form>

        </div>


        <div class="hidden md:flex justify-end">
            <img src="{{ asset('Imagens/cadastroImagem.png') }}" class="w-[480px]">
        </div>

    </div>

</body>
</html>
