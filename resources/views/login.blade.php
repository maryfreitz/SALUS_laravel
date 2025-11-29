<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login — Salus</title>

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
                Olá! Seja bem vindo a Salus.
            </h1>

            <p class="text-[#0a2a3d] opacity-70 text-lg">
                Um sistema completo, feito para você!
            </p>

            @if ($errors->any())
                <div class="bg-red-100 text-red-800 p-3 rounded-md">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="flex gap-3 mb-7">
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="w-1/2 px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 outline-none"
                        required
                    />
                    
                    <input
                        type="password"
                        name="password"
                        placeholder="Senha"
                        class="w-1/2 px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 outline-none"
                        required
                    />
                </div>

                <button type="submit"
                    class="px-8 py-2 rounded-md bg-[#1f5d85] text-white font-semibold hover:bg-[#174a6b] transition">
                    Entrar
                </button>

                <p class="text-sm text-[#0a2a3d] opacity-70 mt-2">
                    Não tem uma conta?
                    <a href="#" class="text-blue-700 font-medium hover:underline">Cadastre-se</a>
                </p>
            </form>

        </div>

        <div class="hidden md:flex justify-end">
            <img src="{{ asset('Imagens/ImagemLogin.png') }}" class="w-[480px]">
        </div>

    </div>

</body>
</html>
