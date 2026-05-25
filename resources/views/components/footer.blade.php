<footer class="border-t border-slate-200 bg-slate-50">
    <div class="container-shell grid gap-10 py-14 md:grid-cols-2 lg:grid-cols-4">
        <div>
            <p class="font-heading text-lg font-bold text-primary">ECA Professional Services</p>
            <p class="mt-3 text-sm text-slate-600">
                Trusted accounting, audit, tax, and advisory solutions for Nigerian businesses.
            </p>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">Quick Links</p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600">
                @foreach ($site['navigation'] as $item)
                    <li><a href="{{ route($item['route']) }}" class="hover:text-primary">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">Service Links</p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600">
                @foreach (array_slice($site['services']['overview'], 0, 6) as $service)
                    <li><a href="{{ route($service['route']) }}" class="hover:text-primary">{{ $service['name'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">Contact and Newsletter</p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600">
                <li>{{ $site['contact']['phone'] }}</li>
                <li>{{ $site['contact']['email'] }}</li>
                <li>{{ $site['contact']['address'] }}</li>
            </ul>
            <form class="mt-4 flex flex-col gap-2 sm:flex-row" action="#" method="post">
                @csrf
                <label class="sr-only" for="newsletter-email">Email address</label>
                <input id="newsletter-email" type="email" name="email" placeholder="Your email" class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm focus:border-primary focus:outline-none" />
                <button type="submit" class="rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-white hover:bg-primary-deep">Join</button>
            </form>
            <div class="mt-4 flex items-center gap-3 text-sm text-slate-500">
                <a href="#" aria-label="LinkedIn" class="hover:text-primary">LinkedIn</a>
                <a href="#" aria-label="X" class="hover:text-primary">X</a>
                <a href="#" aria-label="Facebook" class="hover:text-primary">Facebook</a>
            </div>
        </div>
    </div>

    <div class="border-t border-slate-200 py-4 text-center text-xs text-slate-500">
        &copy; {{ now()->year }} ECA Professional Services. All rights reserved.
    </div>
</footer>