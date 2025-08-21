<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        $technologyCategory = $categories->where('slug', 'technology-innovation')->first();
        $economicsCategory = $categories->where('slug', 'economics-finance')->first();
        $popCultureCategory = $categories->where('slug', 'pop-culture-analysis')->first();

        // Technology & Innovation Posts
        Post::create([
            'title' => 'GPT-5 and the Future of Artificial Intelligence: Revolution or Evolution?',
            'slug' => 'gpt-5-future-artificial-intelligence-revolution-evolution',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="AI and GPT-5 Technology" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>OpenAI has announced the development of <a href="https://openai.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">GPT-5</a>, scheduled for release in 2025. This latest language model is claimed to have significantly more advanced reasoning capabilities than its predecessors, with performance approaching Artificial General Intelligence (AGI). Enhanced multimodal features enable GPT-5 to process text, images, audio, and video simultaneously with high accuracy.</p>

            <p>The impact of this technology on industries is highly significant. The education, healthcare, and creative industries will undergo massive transformation. However, concerns about job displacement and ethical implications of AI usage are growing. <a href="https://www.anthropic.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Anthropic</a> and the <a href="https://www.safe.ai" target="_blank" class="text-emerald-600 hover:text-emerald-700">Center for AI Safety</a> have issued guidelines for safe and responsible AI development.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AI Model</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Parameters</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capabilities</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Release Year</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">GPT-3</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">175B</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Text Generation</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2020</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">GPT-4</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">1.76T</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Multimodal</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2023</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">GPT-5</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">10T+</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">AGI-level Reasoning</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>As technology professionals, it\'s important for us to understand that GPT-5 is not just about technology, but also about how we as humans adapt to these changes. Investment in AI literacy and continuous learning becomes key to staying relevant in the post-GPT-5 era.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $technologyCategory->id,
            'date' => '2025-01-15',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Laravel 12: Leading PHP Framework with Revolutionary Features',
            'slug' => 'laravel-12-php-framework-revolutionary-features',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Laravel PHP Development" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://laravel.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Laravel 12</a>, released in 2024, brings fundamental changes to modern web application development. With PHP 8.4 support and architecture optimized for cloud-native applications, Laravel 12 offers up to 40% better performance compared to previous versions. Key features like improved Octane integration and native support for <a href="https://www.docker.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Docker containerization</a> make deployment more efficient.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feature</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Laravel 11</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Laravel 12</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Improvement</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Performance</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Baseline</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">+40% faster</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Significant</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">PHP Support</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">8.2+</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">8.4+</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Latest</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Container Support</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Limited</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Native Docker</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Enhanced</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>The Laravel ecosystem continues to evolve with tools like <a href="https://livewire.laravel.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Livewire 3</a> enabling reactive application development without complex JavaScript. Integration with <a href="https://inertiajs.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Inertia.js</a> and <a href="https://vuejs.org" target="_blank" class="text-emerald-600 hover:text-emerald-700">Vue 3</a> provides high flexibility for modern single-page applications. Laravel Pulse as a built-in monitoring tool also provides real-time insights into application performance.</p>

            <p>The Indonesian Laravel community is increasingly active with various meetups and conferences like the <a href="https://laravel.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Laravel Indonesia Conference</a>. Career opportunities for Laravel developers are very promising, especially with increasing Laravel adoption at Indonesian unicorn startups like Gojek, Tokopedia, and Bukalapak using Laravel for various microservices.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $technologyCategory->id,
            'date' => '2025-01-12',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Quantum Computing: IBM and Google Breakthroughs Changing Technology Landscape',
            'slug' => 'quantum-computing-ibm-google-breakthroughs-technology',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Quantum Computing Technology" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://www.ibm.com/quantum" target="_blank" class="text-emerald-600 hover:text-emerald-700">IBM Quantum</a> and <a href="https://quantumai.google" target="_blank" class="text-emerald-600 hover:text-emerald-700">Google Quantum AI</a> have just achieved important milestones in quantum computing with concrete demonstrations of quantum advantage. IBM\'s 1000-qubit Condor chip and Google\'s quantum error correction breakthrough mark a new era of computing that will revolutionize cryptography, drug discovery, and financial modeling.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantum Processor</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qubits</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Key Achievement</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">IBM</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Condor</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">1,000+</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Scale breakthrough</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Google</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Willow</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">105</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Error correction</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Microsoft</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Azure Quantum</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Variable</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Cloud platform</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>The implications for the technology industry are enormous. Current encryption methods used in blockchain and cryptocurrency could potentially become obsolete within 10-15 years. <a href="https://www.nist.gov/cybersecurity" target="_blank" class="text-emerald-600 hover:text-emerald-700">NIST</a> has already begun developing post-quantum cryptography standards to anticipate this threat. Companies like <a href="https://www.microsoft.com/quantum" target="_blank" class="text-emerald-600 hover:text-emerald-700">Microsoft</a> and <a href="https://aws.amazon.com/braket/" target="_blank" class="text-emerald-600 hover:text-emerald-700">Amazon</a> are also racing to develop quantum cloud services.</p>

            <p>For Indonesia, quantum computing opens great opportunities in sectors such as oil & gas exploration, weather prediction, and logistics optimization. Universities like ITB and UI have begun developing quantum research programs. Investment in quantum education and research collaboration with global players is crucial to not falling behind in this quantum revolution.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $technologyCategory->id,
            'date' => '2025-01-10',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Web3 and Blockchain: Reality vs Hype in Post-Crypto Winter Era',
            'slug' => 'web3-blockchain-reality-vs-hype-post-crypto-winter',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Blockchain and Web3 Technology" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>After the crypto winter of 2022-2023, the blockchain industry is experiencing an interesting maturation phase. <a href="https://ethereum.org" target="_blank" class="text-emerald-600 hover:text-emerald-700">Ethereum</a> post-merge has reduced energy consumption by 99%, while <a href="https://solana.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Solana</a> proves scalability with 65,000 TPS throughput. Real-world applications like supply chain tracking, digital identity, and decentralized finance (DeFi) are starting to show concrete utility.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Blockchain</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">TPS</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Energy Consumption</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Use Case</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Ethereum</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">15</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Low (PoS)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">DeFi, NFTs</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Solana</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">65,000</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Medium</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">High-speed apps</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Polygon</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">7,000</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Very Low</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Layer 2 scaling</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Institutional adoption has increased significantly with <a href="https://www.blackrock.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">BlackRock</a> and <a href="https://www.fidelity.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Fidelity</a> launching Bitcoin ETFs, while <a href="https://www.jpmorgan.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">JPMorgan</a> uses blockchain for inter-bank settlement. However, regulatory clarity remains a major challenge. The <a href="https://www.sec.gov" target="_blank" class="text-emerald-600 hover:text-emerald-700">SEC</a> in America and <a href="https://www.bi.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bank Indonesia</a> are still developing comprehensive frameworks.</p>

            <p>In Indonesia, blockchain startups like <a href="https://www.pintu.co.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Pintu</a> and <a href="https://www.indodax.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Indodax</a> have reached millions of users. Government initiatives like the digital rupiah pilot project show commitment to blockchain adoption. Opportunities for developers with smart contract development skills, particularly Solidity and Rust, are very promising in the Indonesian market.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $technologyCategory->id,
            'date' => '2025-01-08',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Apple Vision Pro and Spatial Computing: Game Changer or Expensive Gadget?',
            'slug' => 'apple-vision-pro-spatial-computing-analysis',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1592478411213-6153e4ebc696?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Virtual Reality and Spatial Computing" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://www.apple.com/apple-vision-pro/" target="_blank" class="text-emerald-600 hover:text-emerald-700">Apple Vision Pro</a> has changed perceptions about mixed reality with its revolutionary spatial computing paradigm. Priced at $3,499, this device targets professionals and early adopters willing to invest in future computing interfaces. Real-world testing shows promising applications for design, education, and remote collaboration.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feature</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vision Pro</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Meta Quest 3</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">HoloLens 2</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Price</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$3,499</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$499</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$3,500</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Resolution</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">4K per eye</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2064x2208</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2048x1080</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Target Market</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Professional</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Consumer</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Enterprise</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Ecosystem development is crucial for Vision Pro success. <a href="https://developer.apple.com/visionos/" target="_blank" class="text-emerald-600 hover:text-emerald-700">VisionOS</a> SDK provides developers with tools for creating immersive experiences that seamlessly blend digital and physical worlds. Major apps like <a href="https://www.microsoft.com/microsoft-365" target="_blank" class="text-emerald-600 hover:text-emerald-700">Microsoft 365</a>, <a href="https://www.adobe.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Adobe Creative Suite</a>, and <a href="https://unity.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Unity</a> have already adapted to this platform.</p>

            <p>The implications for industries like architecture, medical training, and entertainment are enormous. In Indonesia, potential applications in tourism (virtual heritage sites), education (immersive learning), and manufacturing (AR assembly guidance) open new opportunities. However, price points and content availability remain barriers to mass adoption in emerging markets like Indonesia.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $technologyCategory->id,
            'date' => '2025-01-05',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        // Economics & Finance Posts
        Post::create([
            'title' => 'Forex Trading 2025: USD/IDR Analysis and Hedging Strategies in Uncertainty Era',
            'slug' => 'forex-trading-2025-usd-idr-hedging-strategies',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Forex Trading Charts" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>The forex market is experiencing high volatility in early 2025 with the <a href="https://www.federalreserve.gov" target="_blank" class="text-emerald-600 hover:text-emerald-700">Federal Reserve</a> maintaining a hawkish stance toward inflation. USD/IDR fluctuates in the 15,800-16,200 range with pressure from Indonesia\'s trade deficit and global risk sentiment. <a href="https://www.bi.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bank Indonesia</a> has conducted interventions 8 times to stabilize the rupiah.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Currency Pair</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Rate</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Volatility</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trend</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">USD/IDR</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">16,050</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">High</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">USD Strengthening</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">EUR/USD</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">1.0820</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Medium</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Consolidating</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">GBP/USD</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">1.2650</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Medium</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">GBP Recovery</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Commodity currencies like AUD and CAD show relative strength due to China\'s gradual economic recovery. The <a href="https://www.ecb.europa.eu" target="_blank" class="text-emerald-600 hover:text-emerald-700">European Central Bank</a> is beginning to pivot to dovish policy due to recession concerns in the eurozone. Professional traders are using carry trade strategies with funding currencies like JPY and CHF to capitalize on interest rate differentials.</p>

            <p>For Indonesian retail traders, focusing on major pairs like EUR/USD and GBP/USD provides optimal liquidity and spreads. Risk management through proper position sizing and stop-loss placement is crucial given the high volatility environment. Platforms like <a href="https://www.metatrader5.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">MetaTrader 5</a> and <a href="https://www.tradingview.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">TradingView</a> provide advanced tools for technical analysis and automated trading.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $economicsCategory->id,
            'date' => '2025-01-14',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Cryptocurrency Market 2025: Bitcoin Halving Impact and Altcoin Season Prediction',
            'slug' => 'cryptocurrency-market-2025-bitcoin-halving-altcoin-season',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1621761191319-c6fb62004040?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Bitcoin and Cryptocurrency Charts" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>The <a href="https://bitcoin.org" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bitcoin</a> halving event that occurred in April 2024 is beginning to show historical impact with gradual supply shock. Bitcoin price action in the $95,000-$105,000 range reflects strong institutional demand from ETF inflows and corporate treasury allocations. <a href="https://www.microstrategy.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">MicroStrategy</a> and <a href="https://www.tesla.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Tesla</a> continue accumulating Bitcoin as a hedge against inflation.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cryptocurrency</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price Range</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Market Cap</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Performance</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Bitcoin (BTC)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$95K-$105K</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$2.1T</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">+120% YTD</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Ethereum (ETH)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$3.8K-$4.2K</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$480B</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">+85% YTD</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Solana (SOL)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$220-$280</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$120B</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">+400% YTD</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>The altcoin market is showing signs of a nascent bull market with <a href="https://ethereum.org" target="_blank" class="text-emerald-600 hover:text-emerald-700">Ethereum</a> benefiting from institutional staking and L2 ecosystem growth. <a href="https://polygon.technology" target="_blank" class="text-emerald-600 hover:text-emerald-700">Polygon</a>, <a href="https://arbitrum.io" target="_blank" class="text-emerald-600 hover:text-emerald-700">Arbitrum</a>, and <a href="https://www.optimism.io" target="_blank" class="text-emerald-600 hover:text-emerald-700">Optimism</a> are experiencing significant TVL growth. DeFi protocols like <a href="https://uniswap.org" target="_blank" class="text-emerald-600 hover:text-emerald-700">Uniswap</a> and <a href="https://aave.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Aave</a> have reached all-time highs in trading volume and lending activity.</p>

            <p>The Indonesian crypto market is becoming more mature with regulatory clarity from <a href="https://www.bappebti.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">BAPPEBTI</a>. Local exchanges like <a href="https://www.pintu.co.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Pintu</a> and <a href="https://tokocrypto.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Tokocrypto</a> report 300% year-over-year user growth. Institutional adoption through crypto-backed lending and yield farming products provides alternative investment opportunities for sophisticated Indonesian investors.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $economicsCategory->id,
            'date' => '2025-01-11',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Japan Asset Bubble 1980s: Lessons for Modern Indonesian Property Market',
            'slug' => 'japan-asset-bubble-lessons-indonesian-property-market',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1551801841-ecad875a5142?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Tokyo Real Estate Market" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>The Japanese asset price bubble of 1986-1991 provides valuable insights for understanding current property dynamics in Indonesia. At the peak of the bubble, the <a href="https://www.boj.or.jp" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bank of Japan</a> maintained ultra-low interest rates that encouraged excessive leverage and speculation. Land prices in Tokyo increased 3000% in 5 years, creating an illusion of perpetual wealth growth that was ultimately unsustainable.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Period</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tokyo Land Price</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jakarta Property</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Key Drivers</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1986-1991</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">+3000%</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">N/A</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Low rates, speculation</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2010-2020</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Stagnant</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">+250%</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Foreign investment</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2020-2025</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Recovery</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">+50%</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Demographic dividend</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Parallels with contemporary Indonesia are quite striking. Property prices in Jakarta and Surabaya have appreciated 200-300% over the past decade, driven by easy credit conditions and foreign investment inflows. <a href="https://www.bi.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bank Indonesia</a> macroprudential policies like LTV limits and DSTI ratios are designed to prevent excessive lending, but enforcement and effectiveness remain questionable.</p>

            <p>Key lessons from the Japan experience: 1) Asset bubbles can persist longer than rational expectations suggest, 2) Government intervention is often too little too late, 3) Demographic changes can exacerbate bubble deflation. Indonesia, with its still-strong population dividend, has natural demand for property, but the affordability crisis in major cities shows potential misalignment between prices and fundamentals. Investors should focus on cash flow positive properties and avoid speculative leveraging.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $economicsCategory->id,
            'date' => '2025-01-09',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'China Economic Slowdown: Impact on Global Supply Chain and Indonesia',
            'slug' => 'china-economic-slowdown-global-supply-chain-indonesia',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="China Economic Indicators" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>China\'s economic growth slowed to 4.8% in Q4 2024, the lowest since the pandemic, driven by property sector crisis and demographic headwinds. The <a href="https://www.pboc.gov.cn" target="_blank" class="text-emerald-600 hover:text-emerald-700">People\'s Bank of China</a> has implemented stimulus measures worth $2 trillion, but effectiveness is limited due to structural issues in real estate and local government debt. The Evergrande collapse and subsequent property developer defaults have created significant systemic risks.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sector</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">China Impact</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Indonesia Effect</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opportunity</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Manufacturing</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">Decline</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Relocation gains</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">High</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Commodities</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">Lower demand</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">Export decline</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Medium</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Technology</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Restructuring</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Tech transfer</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">High</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>The impact on Indonesia is multifaceted and complex. As China\'s largest trading partner in ASEAN, Indonesia is experiencing reduced demand for coal, palm oil, and nickel exports. The <a href="https://www.kemenkeu.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Ministry of Finance</a> projects a 0.3-0.5% GDP growth reduction due to China\'s slowdown. However, opportunities also emerge from supply chain diversification as companies relocate manufacturing from China to Indonesia.</p>

            <p>Investment opportunities lie in sectors that benefit from the China+1 strategy: manufacturing, logistics, and industrial real estate. Companies like <a href="https://www.astra.co.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Astra International</a> and <a href="https://www.sinarmas.co.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Sinar Mas</a> are already positioning to capture relocated manufacturing demand. Currency implications are also significant, with CNY weakness potentially benefiting Indonesian exporters competing with Chinese products in global markets.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $economicsCategory->id,
            'date' => '2025-01-07',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Federal Reserve Policy 2025: Interest Rate Outlook and Emerging Markets Impact',
            'slug' => 'federal-reserve-policy-2025-interest-rate-emerging-markets',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Federal Reserve Building" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>The <a href="https://www.federalreserve.gov" target="_blank" class="text-emerald-600 hover:text-emerald-700">Federal Reserve</a> maintains a restrictive monetary policy with the fed funds rate in the 5.25-5.50% range, signaling commitment to bringing inflation to the 2% target. December FOMC minutes revealed concerns about persistent core inflation and a robust labor market requiring an extended higher-for-longer approach. Market expectations for rate cuts in 2025 continue to decline, with fed funds futures pricing only 50bps cuts vs 150bps previously expected.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Central Bank Rate</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Account</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Risk Level</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">United States</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">5.25-5.50%</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">-3.2% GDP</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Low</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Indonesia</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">6.25%</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">-1.8% GDP</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Medium</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Brazil</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">11.75%</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">-2.5% GDP</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">High</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Emerging markets, including Indonesia, face continued pressure from a strong dollar and capital outflows. High US yields make dollar-denominated assets attractive, reducing appetite for EM investments. The <a href="https://www.imf.org" target="_blank" class="text-emerald-600 hover:text-emerald-700">IMF</a> estimates show $200 billion in capital outflows from emerging markets in the past 6 months. Countries with current account deficits like Indonesia are particularly vulnerable to capital flow reversals.</p>

            <p><a href="https://www.bi.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bank Indonesia</a>\'s response strategy focuses on maintaining competitiveness without triggering capital flight. The recent 25bps rate hike to 6.25% is designed to support the rupiah while balancing domestic growth concerns. Fiscal policy coordination is crucial, with the government planning infrastructure spending frontloading to offset monetary tightening impact. The corporate sector with dollar debt exposure requires careful monitoring to prevent balance sheet stress.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $economicsCategory->id,
            'date' => '2025-01-04',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        // Pop Culture Analysis Posts
        Post::create([
            'title' => 'Superman Legacy (2025): James Gunn Reboot and Future of DC Cinematic Universe',
            'slug' => 'superman-legacy-james-gunn-reboot-dc-cinematic-universe',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1612036782180-6f0b6cd846fe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Superman and DC Comics" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://www.dc.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">DC Studios</a> under James Gunn\'s leadership takes a bold approach with Superman Legacy, completely reimagining the Man of Steel for modern audiences. David Corenswet\'s casting as Clark Kent/Superman marks a departure from Zack Snyder\'s dark interpretation, returning to the hopeful and inspiring Superman of classic comics. This film serves as the cornerstone for <a href="https://www.warnerbros.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Warner Bros</a>\' ambitious rebooted DC Universe.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Character</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actor</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Previous Iteration</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">New Direction</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Superman</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">David Corenswet</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Henry Cavill (Dark)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Hopeful & Classic</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Lois Lane</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Rachel Brosnahan</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Amy Adams</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Investigative Focus</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Lex Luthor</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Nicholas Hoult</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Jesse Eisenberg</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Corporate Villain</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Production values and visual effects show significant improvement with seamless practical effects integration. Gunn\'s experience from <a href="https://www.marvel.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Marvel\'s Guardians of the Galaxy</a> trilogy is evident in character development and organic humor balance. The supporting cast, including Rachel Brosnahan as Lois Lane and Nicholas Hoult as Lex Luthor, provides compelling fresh dynamics for established characters.</p>

            <p>Cultural impact in Indonesia is significant given Superman\'s enduring popularity. <a href="https://www.cgv.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">CGV</a> and <a href="https://www.cineplex21.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Cinema XXI</a> report record-breaking advance ticket sales. Local comic book communities like <a href="https://www.komikita.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Komikita</a> organize viewing parties and cosplay events. This film also serves as a catalyst for renewed interest in DC Comics publishing in the Indonesian market.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $popCultureCategory->id,
            'date' => '2025-01-13',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'The Fantastic Four MCU Integration: Marvel Phase 5 Game Changer Analysis',
            'slug' => 'fantastic-four-mcu-integration-marvel-phase-5-analysis',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Marvel Comics and Fantastic Four" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://www.marvel.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Marvel Studios</a> is finally bringing the Fantastic Four into the MCU with strategically chosen casting: Pedro Pascal, Vanessa Kirby, Joseph Quinn, and Ebon Moss-Bachrach, selected to appeal to diverse demographics. This film is crucial for establishing cosmic-level threats and introducing concepts like multiverse travel and advanced scientific exploration that will define Phase 5\'s narrative arc.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Character</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actor</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Powers</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MCU Role</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Mr. Fantastic</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Pedro Pascal</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Elasticity</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Scientific Leader</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Invisible Woman</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Vanessa Kirby</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Invisibility, Force Fields</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Team Strategist</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Human Torch</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Joseph Quinn</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Fire, Flight</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Youth Appeal</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">The Thing</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Ebon Moss-Bachrach</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Super Strength</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Comic Relief</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Technical aspects are very promising with <a href="https://www.ilm.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Industrial Light & Magic</a> handling VFX for Mr. Fantastic\'s elasticity and Thing\'s rock form. Director Matt Shakman brings experience from WandaVision, demonstrating ability to balance intimate character moments with spectacular set pieces. Script development involves Chris McKenna and Erik Sommers, who previously worked on the successful Spider-Man trilogy.</p>

            <p>The Indonesian Marvel fanbase is extremely enthusiastic, with <a href="https://www.marvelindo.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Marvel Indonesia</a> communities organizing massive theory discussions and merchandise pre-orders. Local theaters are preparing for IMAX and premium format screenings that sold out weeks in advance. This film also presents an educational opportunity for Indonesian audiences to learn about scientific concepts through entertaining media, potentially inspiring interest in STEM fields among younger demographics.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $popCultureCategory->id,
            'date' => '2025-01-06',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'The Big Short Explained: Financial Crisis Lessons for Indonesian Investors',
            'slug' => 'big-short-explained-financial-crisis-lessons-indonesian-investors',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Financial Crisis and Wall Street" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://www.imdb.com/title/tt1596363/" target="_blank" class="text-emerald-600 hover:text-emerald-700">The Big Short</a> brilliantly deconstructs the 2008 financial crisis through the perspective of protagonists who bet against the housing market. This film is an educational masterpiece that explains complex financial instruments like CDOs, credit default swaps, and synthetic derivatives through accessible storytelling. Key lesson: markets can remain irrational longer than individuals can remain solvent, but fundamentals eventually prevail.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Financial Instrument</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">2008 Crisis Role</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Indonesia Parallel</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Risk Level</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Subprime Mortgages</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">Crisis Trigger</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Property speculation</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Medium</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">CDOs</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">Amplifier</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Limited exposure</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Low</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">P2P Lending</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Not relevant</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">Rapid growth</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-red-600">High</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Parallels with Indonesia\'s financial landscape are quite relevant. Property speculation in major cities, excessive leverage in retail trading, and lack of financial literacy among retail investors create potentially dangerous conditions. <a href="https://www.ojk.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">OJK</a> regulations don\'t fully address systemic risks from peer-to-peer lending and cryptocurrency speculation widespread in the Indonesian market.</p>

            <p>Investment wisdom from the film: 1) Due diligence is essential before investing, 2) Contrarian thinking can be profitable but requires patience and conviction, 3) Risk management is more important than profit maximization. Indonesian investors should focus on fundamental analysis, diversification, and maintaining emergency funds. Resources like <a href="https://www.idx.co.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">IDX</a> investor education programs and <a href="https://www.bareksa.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Bareksa</a> financial literacy content are crucial for developing a sophisticated investment mindset.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $popCultureCategory->id,
            'date' => '2025-01-03',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'Cosplay Culture Indonesia: Japanese Influence and Creative Economy Impact',
            'slug' => 'cosplay-culture-indonesia-japanese-influence-creative-economy',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Anime and Cosplay Culture" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p>Cosplay culture in Indonesia is experiencing exponential growth, with communities like <a href="https://www.cosplayerindonesia.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Cosplayer Indonesia</a> reaching 500,000+ active members. Japanese cultural influence through anime, manga, and J-pop creates demand for high-quality costumes and accessories, driving significant economic activity. Events like <a href="https://www.animefestival.asia" target="_blank" class="text-emerald-600 hover:text-emerald-700">Anime Festival Asia</a> and <a href="https://www.comicfrontier.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Comic Frontier</a> attract tens of thousands of attendees annually.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Market Size</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Growth Rate</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Key Players</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Costume Production</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$25M</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">400% YoY</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Local craftsmen</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Photography Services</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$15M</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">250% YoY</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Freelance photographers</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Event Organization</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">$10M</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">300% YoY</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Convention organizers</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>Economic impact is substantial, with costume production, photography services, and event organization generating an estimated $50 million revenue annually. Local craftsmen and seamstresses are developing specialized skills in armor construction, wig styling, and prop making that are competitive with international standards. <a href="https://www.tokopedia.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Tokopedia</a> and <a href="https://www.shopee.co.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Shopee</a> cosplay categories show 400% year-over-year growth.</p>

            <p>Cultural significance extends beyond entertainment to social acceptance and self-expression. Cosplay provides a platform for introverted individuals to build confidence and social skills. Educational aspects include learning about Japanese culture, improving crafting abilities, and developing business skills through costume commissioning. Government recognition through <a href="https://www.kemenparekraf.go.id" target="_blank" class="text-emerald-600 hover:text-emerald-700">Ministry of Tourism and Creative Economy</a> programs supports cosplay as a legitimate form of creative expression and cultural exchange.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $popCultureCategory->id,
            'date' => '2025-01-02',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        Post::create([
            'title' => 'K-Pop Industry Analysis: BTS Military Service Impact and Next Generation Groups',
            'slug' => 'kpop-industry-bts-military-service-next-generation-groups',
            'content' => '<div class="mb-6">
                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="K-Pop Concert and Performance" class="w-full h-64 object-cover rounded-lg mb-4">
            </div>

            <p><a href="https://www.bts.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">BTS</a> military enlistment creates an unprecedented vacuum in the global K-pop landscape, estimated to be worth $12 billion annually. <a href="https://www.hybe.co.kr" target="_blank" class="text-emerald-600 hover:text-emerald-700">HYBE Corporation</a> stock is experiencing volatility with market cap fluctuations exceeding $2 billion since the announcement. However, this transition period creates opportunities for next-generation groups like <a href="https://www.newjeans.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">NewJeans</a>, <a href="https://www.ive.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">IVE</a>, and <a href="https://www.lesserafim.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">LE SSERAFIM</a> to establish dominance.</p>

            <div class="my-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Group</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Agency</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Indonesia Fanbase</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Market Position</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">BTS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">HYBE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2.5M</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-yellow-600">Military hiatus</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">NewJeans</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">ADOR</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">1.2M</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Rising fast</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">BLACKPINK</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">YG</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">1.8M</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">Established</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>The Indonesian K-pop market remains robust, with streaming numbers on <a href="https://www.spotify.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Spotify</a> and <a href="https://www.youtube.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">YouTube</a> showing consistent growth despite the BTS hiatus. Local fandoms are adapting by supporting multiple groups simultaneously and showing increased interest in K-drama OSTs and solo artist projects. <a href="https://www.jktarena.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Jakarta International Expo</a> concerts consistently sell out within minutes, demonstrating sustained demand.</p>

            <p>Industry evolution is moving toward more diverse content with inclusion of Latin, Western, and Southeast Asian musical influences. Collaborations between K-pop artists and Indonesian musicians like <a href="https://www.richbrian.com" target="_blank" class="text-emerald-600 hover:text-emerald-700">Rich Brian</a> partnerships are opening new markets. Educational impact is significant, with Korean language enrollment at Indonesian universities increasing 300% over the past 3 years. Cultural diplomacy through <a href="https://www.korea.kr" target="_blank" class="text-emerald-600 hover:text-emerald-700">Korean Cultural Center</a> programs strengthens bilateral relationships between Indonesia and South Korea.</p>',
            'author_id' => $users->random()->id,
            'category_id' => $popCultureCategory->id,
            'date' => '2025-01-01',
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(1, 30)),
        ]);

        // More posts follow similar pattern...
    }
}
