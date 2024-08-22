@csrf()

<!--<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
- old eh um helper q identifca se ja existe um valor na sessão 
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha">
<button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white dark:text-gray-400 bg-purple-900 dark:bg-gray-800 hover:text-orange-500 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">Enviar</button>-->

        <!-- Nome -->
        <div>
            <x-input-label-users for="name" :value="__('Nome')" />
            <x-text-input-users id="name" class="block mt-1 w-full" required autofocus autocomplete="username" type="text" name="name"  value="{{ $user->name ?? old('name') }}"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label-users for="email" :value="__('E-mail')" />
            <x-text-input-users id="email" class="block mt-1 w-full" required autofocus autocomplete="username" type="email" name="email"  value="{{ $user->email ?? old('email') }}"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label-users for="password" :value="__('Senha')" />

            <x-text-input-users id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

            <x-third-button class="mt-4" type="submit">
                {{ __('Enviar') }}
            </x-third-button>
        </div>