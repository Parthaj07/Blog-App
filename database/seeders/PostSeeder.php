<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'name' => 'The Rise of Artificial Intelligence in 2024',
            'content' => 'Artificial Intelligence (AI) has seen incredible growth in recent years, and 2024 is no exception. AI is becoming an integral part of industries from healthcare to finance. In this post, we dive into the latest trends, challenges, and opportunities within the world of AI.',
            'image' => 'images/post1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'Exploring the Future of Quantum Computing',
            'content' => 'Quantum computing promises to revolutionize industries by solving problems that traditional computers cannot handle. This post will explore how quantum computing works, its potential applications, and the companies leading the way in this field.',
            'image' => 'images/post2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'Top Programming Languages to Learn',
            'content' => 'As technology continues to evolve, certain programming languages remain dominant. In this article, we highlight the top programming languages every developer should know in 2024, including Python, JavaScript, Rust, and more.',
            'image' => 'images/post3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'Cybersecurity Trends to Watch in 2024',
            'content' => 'Cybersecurity is more important than ever in 2024, with data breaches and online threats becoming increasingly common. In this post, we explore the latest cybersecurity trends and provide tips on how to protect your digital assets.',
            'image' => 'images/post4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'The Impact of 5G Technology on IoT',
            'content' => 'The deployment of 5G networks is set to transform the Internet of Things (IoT). This article will explore how 5G technology is enhancing the capabilities of IoT devices, enabling faster communication and opening new possibilities for smart cities and industries.',
            'image' => 'images/post5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'Blockchain: Beyond Cryptocurrencies',
            'content' => 'Blockchain technology is often associated with cryptocurrencies like Bitcoin, but its applications extend far beyond digital currencies. This post examines how blockchain is being used in various industries, including supply chain management, healthcare, and finance.',
            'image' => 'images/post6.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'The Role of Edge Computing ',
            'content' => 'Edge computing is transforming how data is processed and transmitted across the network. By bringing computation closer to the source of data generation, edge computing reduces latency and enhances performance. This post explores how edge computing is being applied in industries such as healthcare, autonomous vehicles, and IoT.',
            'image' => 'images/post7.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'Cloud Computing Trends to Watch in 2024',
            'content' => 'As businesses move towards more flexible, scalable, and cost-effective solutions, cloud computing continues to be at the forefront of technology innovation. This article discusses the latest cloud computing trends, including hybrid clouds, AI-powered cloud solutions, and the growing demand for cloud security.',
            'image' => 'images/post8.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'name' => 'AI-Powered Automation in Software Development',
            'content' => 'AI is revolutionizing the software development industry by automating routine tasks, enhancing code quality, and streamlining project management. In this post, we explore how AI-powered tools like code analyzers, bug detectors, and project management assistants are changing the way software is developed.',
            'image' => 'images/post9.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
