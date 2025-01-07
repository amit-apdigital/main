<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $videoTitles = [

            "The Future of Artificial Intelligence: Innovations and Applications",
            "Blockchain Beyond Cryptocurrency: Real-world Use Cases",
            "Cybersecurity Trends and Threat Mitigation Strategies",
            "IoT Revolution: Connecting the Unconnected",
            "Augmented Reality in Business: Transformative Applications",
            "5G and the Next Era of Connectivity",
            "Quantum Computing: From Theory to Practical Implementation",
            "Edge Computing: Redefining Data Processing",
            "Robotics and Automation: Advancements and Challenges",
            "Ethical AI: Navigating the Moral Landscape of Technology",
            "Smart Cities: Building Sustainable and Connected Urban Spaces",
            "The Role of Big Data in Decision-Making",
            "Digital Transformation: Strategies for Success",
            "Voice Technology and Conversational Interfaces",
            "Emerging Trends in Biotechnology and Healthcare IT",
            "The Impact of 3D Printing on Manufacturing and Design",
            "Cryptocurrency and Decentralized Finance (DeFi)",
            "Green Technology: Sustainable Solutions for a Changing World",
            "Human Augmentation: Enhancing the Human Experience with Technology",
            "Future of Work: Adapting to a Remote and Digital Workplace",
            "Neuromorphic Computing: Mimicking the Human Brain",
            "Space Tech: Exploring the Final Frontier",
            "Data Privacy in the Age of Digital Transformation",
            "AR/VR for Education: Transforming Learning Experiences",
            "Biometric Security: The Evolution of Identity Verification",
            "Drones and Their Diverse Applications",
            "AI in Customer Experience: Enhancing Engagement and Satisfaction"            
        ];

        $random = Arr::random($videoTitles);

        $videoTags = [
            "Start-up, Robotics, Keynote, VIP",
            "Artificial Intelligence, Cloud Computing",
            "Software Engineering, Business Development",
            "Artificial Intelligence, Cloud Computing, keynote",
            "Robotics, Artificial Intelligence, VIP",
            "Start-up, Software Engineering, Business Development, VIP",
            "Business Development, Keynote, Cloud Computing",
            "VIP, Artifical Intelligence",
            "Keynote, VIP",
            
        ];
    
        return [
            'youTubeId' => Str::random(5),
            'title' => Arr::random($videoTitles),            
            'description' => 'This is a description field',   
            'tags' => Arr::random($videoTags),
            'url' => 'http://wwww.google.com/',
            'thumbnailURL' => 'http://wwww.google.com/',
                      
        ];
    }
}
