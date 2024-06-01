<?php

namespace Database\Seeders;

use App\Models\CannedResponse;
use App\Models\Category;
use App\Models\Department;
use App\Models\Faq;
use App\Models\ReplyAttachment;
use App\Models\Ticket;
use App\Models\TicketAttachment;
use App\Models\TicketReply;
use App\Models\User;
use App\Services\TicketService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->admin()
            ->create([
                'name'     => 'wiredeskA',
                'email'    => 'admin@wiredesk.com',
                'password' => 'password'
            ]);

        // Department::factory()
        //     ->count(4)
        //     ->create()
        //     ->each(function (Department $department) {
        //         $department->agents()->save(
        //             User::factory()
        //                 ->agent()
        //                 ->create(['email' => $this->generateUniqueAgentEmail()])
        //         );
        //         ;
        //         $department->agents()->saveMany(
        //             User::factory()
        //                 ->agent()
        //                 ->count(2)
        //                 ->create()
        //         );

        //         $department->categories()->saveMany(
        //             Category::factory()
        //                 ->count(2)
        //                 ->create()
        //                 ->each(function (Category $category) {
        //                     $category->faqs()->saveMany(
        //                         Faq::factory()
        //                             ->count(5)
        //                             ->create()
        //                     );
        //                 })
        //         );
        //     });

        // User::factory()
        //     ->client()
        //     ->create([
        //         'name'  => 'Client',
        //         'email' => 'client@wiredesk.com'
        //     ]);

        // $randomCategories = Category::query()
        //     ->inRandomOrder()
        //     ->limit(3)
        //     ->get()
        //     ->each(function (Category $category) {
        //         $category->cannedResponses()->saveMany(
        //             CannedResponse::factory()
        //                 ->count(2)
        //                 ->create()
        //         );

        //         $category->tickets()->saveMany(
        //             Ticket::factory()
        //                 ->count(2)
        //                 ->create()
        //         );
        //     });


        // $ticketService = app(TicketService::class);

        // Ticket::query()
        //     ->get()
        //     ->each(function (Ticket $ticket) use ($ticketService) {
        //         $ticketService->assignToAgent($ticket);

        //         $attachments = TicketAttachment::factory()
        //             ->count(random_int(0, 2))
        //             ->create(['ticket_id' => $ticket->id]);

        //         $ticket->attachments()->saveMany($attachments);

        //         $clientReply = TicketReply::factory()
        //             ->create([
        //                 'ticket_id' => $ticket->id,
        //                 'user_id'   => $ticket->client_id
        //             ]);

        //         $clientReplyAttachments = ReplyAttachment::factory()
        //             ->count(random_int(0, 2))
        //             ->create(['ticket_reply_id' => $clientReply->id]);

        //         $clientReply->attachments()->saveMany($clientReplyAttachments);

        //         $ticket->replies()->save($clientReply);

        //         if ($ticket->agents()->exists()) {
        //             $agentReply = TicketReply::factory()
        //                 ->create([
        //                     'ticket_id' => $ticket->id,
        //                     'user_id'   => $ticket->agents->random()->id
        //                 ]);

        //             $agentReplyAttachments = ReplyAttachment::factory()
        //                 ->count(random_int(0, 2))
        //                 ->create(['ticket_reply_id' => $agentReply->id]);

        //             $agentReply->attachments()->saveMany($agentReplyAttachments);

        //             $ticket->replies()->save($agentReply);
        //         }
        //     });
    }

    // private function generateUniqueAgentEmail(): string
    // {
    //     do {
    //         $email = 'agent' . rand(1, 9999) . '@wiredesk.com';
    //     } while (User::where('email', $email)->exists());

    //     return $email;
    // }
}
