-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2020 at 06:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adv_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'HTML/CSS', 'HTML/CSS', '2020-08-11 04:43:45', '2020-08-11 04:45:52'),
(2, 'Java', 'java', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(3, 'JavaScript', 'javascript', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(4, 'Bootstrap', 'bootstrap', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(5, 'Python', 'python', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(6, 'PHP', 'php', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(7, 'Sql', 'sql', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(8, '.Net', 'net', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(9, 'Angular', 'angular', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(10, 'Laravel', 'laravel', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(11, 'Node.js', 'nodejs', '2020-08-11 04:43:45', '2020-08-11 04:43:45'),
(12, 'c/c++', 'cc', '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(13, 'Laravel 7.0', 'laravel-70', '2020-08-11 04:46:12', '2020-08-11 04:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `channel_id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Changing <div></div> to inline-block doesnt work (repl.it included)', 'I can´t seem to be able to change the div element to an inline block. I really need help with this. Here is my repl.it: https://repl.it/repls/AwareContentTechnician,', 'changing-divdiv-to-inline-block-doesnt-work-replit-included', '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(2, 2, 1, 'Slices JSON array and connect 2 datapairs randomly — EASY or Difficult?', '[{\n                \"fname\": \"Hubert\",\n                \"lname\": \"Maier\",\n                \"email\": \"h@m.com\"},\n                {\n                    \"fname\": \"Hubert1\",...........\n            now i want to connect the users randomly into pairs so each user gets another user as pair partner. then print out the pairs in the console\n            \n            restricted for me: cannot be pair with yourself and if uneven number print the user out who didnt got a match.', 'slices-json-array-and-connect-2-datapairs-randomly-easy-or-difficult', '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(3, 1, 3, 'I am trying to upload image through modal in laravel using ajax', 'BankAccount.findAll({\n                include:[{\n                  model: Group,\n                  include: [Project],\n                  order:[[Project,\"name\",\"ASC\"]]\n                },{\n                  model: BankAccountData,\n                  include: [Category]\n                },{\n                  model: Bank,\n                }],\n                order:[[Group,\"name\",\"ASC\"],[Bank,\"name\",\"ASC\"],[\"bank_account_alias\",\"ASC\"]]\n              })\n        that code above is working but the result of sorting priority is Group>Project>Bank. how can i change the priority to Project>Group>Bank ?. can anyone help?.', 'i-am-trying-to-upload-image-through-modal-in-laravel-using-ajax', '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(4, 1, 5, 'How can i display the input contents of <input type=“text” id=“text” /> [closed]', 'I am using this query to update a status value\n\n            public function updateStatus(Request $request)\n            {\n                $customer = Customer::findOrFail($request->user_id);\n                $customer->status = $request->status;\n                $customer->new_customer_status = 1;\n                $customer->save();\n                return response()->json([message=> User status updated successfully.]);\n            }\n            I want that if status == 1 then after one week $customer->new_customer_status should automatically becomes NULL\n            \n            How can I schedule time or days based query that run automatically after one week or at a given time?', 'how-can-i-display-the-input-contents-of-input-typetext-idtext-closed', '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(5, 2, 7, 'Query PHP AJAX infinite scroll with results from filter', '1\n\n\n            Ive made a PHP foreach loop which displays games and info about them. The info is from a database and it includes a enddate, there are about 5 games in the table and they are all with different enddates. I ve made a JS timer which takes the enddate and counts down to it. ex:(3days 5hours 2seconds). But when i add the timer into the PHP loop, the countdown is only displayed to the first game. How could i make it so that each game gets a countdown? The timer and the php loop:\n            \n            var countDownDate = new Date({{ $comp->EndDate }}).getTime();\n                var x = setInterval(function() {\n            \n                    // Get todays date and time\n                    var now = new Date().getTime();\n            \n                    // Find the distance between now and the count down date\n                    var distance = countDownDate - now;', 'query-php-ajax-infinite-scroll-with-results-from-filter', '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(6, 2, 1, 'Quick Markdown Example', '<pre>An h1 header\r\n============\r\n\r\nParagraphs are separated by a blank line.\r\n\r\n2nd paragraph. *Italic*, **bold**, and `monospace`. Itemized lists\r\nlook like:\r\n\r\n  * this one\r\n  * that one\r\n  * the other one\r\n\r\nNote that --- not considering the asterisk --- the actual text\r\ncontent starts at 4-columns in.\r\n\r\n&gt; Block quotes are\r\n&gt; written like so.\r\n&gt;\r\n&gt; They can span multiple paragraphs,\r\n&gt; if </pre><div><br></div>', 'quick-markdown-example', '2020-08-11 05:16:49', '2020-08-11 05:16:49'),
(7, 2, 1, 'HP Pavilion x360 Core i7 8th Gen', '<?php\r\nnamespace App\\Http\\Controllers;\r\nuse Illuminate\\Support\\Str;\r\nuse App\\Discussion;\r\nuse App\\Notifications\\NewreplyAdded;\r\nuse App\\Reply;\r\nuse App\\User;\r\nuse Illuminate\\Http\\Request;\r\nuse Illuminate\\Support\\Facades\\Auth;\r\n\r\n\r\nclass DiscussionController extends Controller\r\n{\r\n    public function create(){\r\n        return view(\'discuss\');\r\n    }\r\n\r\n    public function store (){\r\n        $this->validate(request(),[\r\n            \'channel_id\'=>\'required\',\r\n            \'title\'=>\'required\',\r\n            \'content\'=>\'required\'\r\n        ]);\r\n        $r=request();\r\n        $discussion=Discussion::c', 'hp-pavilion-x360-core-i7-8th-gen', '2020-08-11 05:26:06', '2020-08-11 05:27:52'),
(8, 2, 1, 'Mi TV 4X 125.7 cm (50 Inches) 4K Ultra HD Android LED TV', '<?php\r\n\r\nnamespace App\\Http\\Controllers;\r\nuse Illuminate\\Support\\Str;\r\nuse App\\Discussion;\r\nuse App\\Notifications\\NewreplyAdded;\r\nuse App\\Reply;\r\nuse App\\User;\r\nuse Illuminate\\Http\\Request;\r\nuse Illuminate\\Support\\Facades\\Auth;\r\n\r\n\r\nclass DiscussionController extends Controller\r\n{\r\n    public function create(){\r\n        return view(\'discuss\');\r\n    }\r\n\r\n    public function store (){\r\n        $this->validate(request(),[\r\n            \'channel_id\'=>\'required\',\r\n            \'title\'=>\'required\',\r\n            \'content\'=>\'required\'\r\n        ]);\r\n        $r=request();\r\n        $discussion=Discussion::create([\r\n            \'title\'=>$r->title,\r\n            \'content\'=>$r->content,\r\n            \'channel_id\'=>$r->channel_id,\r\n            \'user_id\'=>Auth::id(),\r\n            \'slug\'=>Str::slug($r->title)\r\n        ]);\r\n\r\n        Session()->flash(\'success\',\'Discussion Created Successfully\');\r\n\r\n        return redirect()->route(\'discussion\',[\'slug\'=>$discussion->slug]);\r\n    }\r\n\r\n    public function show($slug){\r\n\r\n        $discussion=Discussion::where(\'slug\',$slug)->first();\r\n        $best_ans=$discussion->replies()->where(\'best_answer\',1)->first();\r\n        return view(\'discussion.show\')->with(\'discussion\',$discussion)->with(\'best_ans\',$best_ans);\r\n    }', 'mi-tv-4x-1257-cm-50-inches-4k-ultra-hd-android-led-tv', '2020-08-11 05:28:29', '2020-08-11 05:37:47'),
(9, 2, 3, 'sasas', 'ankirnlkenclsdnclacm\r\n\r\n\r\nnamespace App\\Http\\Controllers;\r\nuse Illuminate\\Support\\Str;\r\nuse App\\Discussion;\r\nuse App\\Notifications\\NewreplyAdded;\r\nuse App\\Reply;\r\nuse App\\User;\r\nuse Illuminate\\Http\\Request;\r\nuse Illuminate\\Support\\Facades\\Auth;\r\n\r\n\r\nclass DiscussionController extends Controller\r\n{\r\n    public function create(){\r\n        return view(\'discuss\');\r\n    }\r\n\r\n    public function store (){\r\n        $this->validate(request(),[\r\n            \'channel_id\'=>\'required\',\r\n            \'title\'=>\'required\',\r\n            \'content\'=>\'required\'\r\n        ]);\r\n        $r=request();\r\n        $discussion=Discussion::create([\r\n            \'title\'=>$r->title,\r\n            \'content\'=>$r->content,\r\n            \'channel_id\'=>$r->channel_id,\r\n            \'user_id\'=>Auth::id(),\r\n            \'slug\'=>Str::slug($r->title)\r\n        ]);\r\n\r\n        Session()->flash(\'success\',\'Discussion Created Successfully\');\r\n\r\n        return redirect()->route(\'discussion\',[\'slug\'=>$discussion->slug]);\r\n    }\r\n\r\n    public function show($slug){\r\n\r\n        $discussion=Discussion::where(\'slug\',$slug)->first();\r\n        $best_ans=$discussion->replies()->where(\'best_answer\',1)->first();\r\n        return view(\'discussion.show\')->with(\'discussion\',$discussion)->with(\'best_ans\',$best_ans);\r\n    }', 'sasas', '2020-08-11 05:37:58', '2020-08-11 05:40:30'),
(10, 2, 1, 'Python With Django', 'namespace App\\Http\\Controllers;\r\nuse Illuminate\\Support\\Str;\r\nuse App\\Discussion;\r\nuse App\\Notifications\\NewreplyAdded;\r\nuse App\\Reply;\r\nuse App\\User;\r\nuse Illuminate\\Http\\Request;\r\nuse Illuminate\\Support\\Facades\\Auth;\r\n\r\n\r\nclass DiscussionController extends Controller\r\n{\r\n    public function create(){\r\n        return view(\'discuss\');\r\n    }\r\n\r\n    public function store (){\r\n        $this->validate(request(),[\r\n            \'channel_id\'=>\'required\',\r\n            \'title\'=>\'required\',\r\n            \'content\'=>\'required\'\r\n        ]);\r\n        $r=request();\r\n        $discussion=Discussion::create([\r\n            \'title\'=>$r->title,\r\n            \'content\'=>$r->content,\r\n            \'channel_id\'=>$r->channel_id,\r\n            \'user_id\'=>Auth::id(),\r\n            \'slug\'=>Str::slug($r->title)\r\n        ]);\r\n\r\n        Session()->flash(\'success\',\'Discussion Created Successfully\');\r\n\r\n        return redirect()->route(\'discussion\',[\'slug\'=>$discussion->slug]);\r\n    }\r\n\r\n    public function show($slug){\r\n\r\n        $discussion=Discussion::where(\'slug\',$slug)->first();\r\n        $best_ans=$discussion->replies()->where(\'best_answer\',1)->first();\r\n        return view(\'discussion.show\')->with(\'discussion\',$discussion)->with(\'best_ans\',$best_ans);\r\n    }\r\n\r\n   ?>\r\nAn h1 header\r\n============\r\n\r\nParagraphs are separated by a blank line.\r\n\r\n2nd paragraph. *Italic*, **bold**, and `monospace`. Itemized lists\r\nlook like:\r\n\r\n  * this one\r\n  * that one\r\n  * the other one', 'python-with-django', '2020-08-11 05:38:55', '2020-08-11 05:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reply_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(162, '2014_10_12_000000_create_users_table', 1),
(163, '2014_10_12_100000_create_password_resets_table', 1),
(164, '2019_08_19_000000_create_failed_jobs_table', 1),
(165, '2020_08_07_050050_create_discussions_table', 1),
(166, '2020_08_07_050118_create_channels_table', 1),
(167, '2020_08_07_050128_create_replies_table', 1),
(168, '2020_08_08_061145_create_likes_table', 1),
(169, '2020_08_10_071536_create_watchers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_answer` tinyint(1) NOT NULL DEFAULT 0,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `content`, `best_answer`, `discussion_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'There are multiple ways of doing it, though some will only work in certain browsers. One that I know off the top of my head is to embed a tiny near-invisible iframe on the page. When the user hits the back button the iframe is navigated back which you can detect and then update your page. Here is another solution.\n\n            You might also want to go view source on something like gmail and see how they do it.\n            \n            Heres a library for the sort of thing youre looking for by the way', 0, 1, '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(2, 2, 'One of my favorite frameworks for doing this is Yahoo!s Browser History Manager. You register events and it calls you back when the user returns Back to that state. And if you want to learn how it works, heres a fun blog entry about the decisions Yahoo! made when designing it.\n            ', 0, 2, '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(3, 2, 'There are multiple ways of doing it, though some will only work in certain browsers. One that I know off the top of my head is to embed a tiny near-invisible iframe on the page. When the user hits the back button the iframe is navigated back which you can detect and then update your page. Here is another solution.\n\n            You might also want to go view source on something like gmail and see how they do it.\n            \n            Heres a library for the sort of thing youre looking for by the way', 1, 3, '2020-08-11 04:43:46', '2020-08-11 04:44:13'),
(4, 2, 'Theres no way to tell when a user clicks the back button of presses the backspace key to go back in the browser, however there are other events that happen in a certain order which are detectable. This example javascript has a reasonably good method for detecting back commands:\n\n                The traditional way, however, is to track user movement through your site using cookies or referrer pages. When the user goes to page A, then page B, then appears at page A again (especially when theres no link on B to A) then you know they went back - A can detect this and redirect them or', 0, 4, '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(5, 2, 'The simplest way to check if you came back to a cached version of your page, which needs to be refreshed, is to add a hidden input element that will be cached, and you can check if it still has its default value.\n\n            Just place the following inside your body tag. I place mine right before the end tag.\n            \n            <input type=\"hidden\" id=\"needs-refresh\" value=\"no\">\n            <script>\n                onload=function(){\n                    var e = document.getElementById(\"needs-refresh\");\n                    if (e.value === \"yes\")\n                        location.reload();\n                    e.value = \"yes\";\n                }\n            </script>', 0, 5, '2020-08-11 04:43:46', '2020-08-11 04:43:46'),
(6, 1, 'heelo how are u', 0, 3, '2020-08-11 04:44:03', '2020-08-11 04:44:03'),
(7, 2, 'An h1 header\r\n============\r\n\r\nParagraphs are separated by a blank line.\r\n\r\n2nd paragraph. *Italic*, **bold**, and `monospace`. Itemized lists\r\nlook like:\r\n\r\n  * this one\r\n  * that one\r\n  * the other one\r\n\r\nNote that --- not considering the asterisk --- the actual text\r\ncontent starts at 4-columns in.\r\n\r\n> Block quotes are\r\n> written like so.\r\n>\r\n> They can span multiple paragraphs,\r\n> if you like.\r\n\r\nUse 3 dashes for an em-dash. Use 2 dashes for ranges (ex., \"it\'s all\r\nin chapters 12--14\"). Three dots ... will be converted to an ellipsis.\r\nUnicode is supported. ☺\r\n\r\n\r\n\r\nAn h2 header\r\n------------\r\n\r\nHere\'s a numbered list:\r\n\r\n 1. first item\r\n 2. second item\r\n 3. third item', 0, 6, '2020-08-11 05:24:47', '2020-08-11 05:24:47'),
(8, 2, 'class RepliesController extends Controller\r\n{\r\n    public function reply($id)\r\n    {\r\n        // return Discussion::find($id);\r\n\r\n        $reply=Reply::create([\r\n            \'user_id\'=>Auth::id(),\r\n            \'discussion_id\'=>$id,\r\n            \'content\'=>request()->content\r\n        ]);\r\n\r\n        $reply->user->points +=25;\r\n\r\n        $reply->user->save();\r\n\r\n        $watcher=array();\r\n\r\n        $d=Discussion::find($id);\r\n\r\n        foreach($d->watchers as $w):\r\n\r\n            array_push($watcher,User::find($w->user_id));\r\n\r\n        endforeach;\r\n        // dd($watcher);\r\n\r\n        Notification::send($watcher,new NewreplyAdded($d));\r\n\r\n        Session()->flash(\'success\',\'Replied to Discussion\');\r\n\r\n        return redirect()->back();\r\n    }\r\n    public function edit($id){\r\n        return view(\'replies.edit\')->with(\'reply\',Reply::find($id));\r\n    }\r\n\r\n    public function update($id){\r\n        $this->validate(request(),[\'content\'=>\'required\']);\r\n\r\n        $reply=Reply::find($id);\r\n        $reply->content=request()->content;\r\n        $reply->save();\r\n\r\n        Session()->flash(\'success\',\'Discussion Update Suceessfully\');\r\n        \r\n        return redirect()->route(\'discussion\',[\'slug\'=>$reply->discussion->slug]);\r\n    }\r\n}', 0, 9, '2020-08-11 05:42:55', '2020-08-11 05:42:55'),
(9, 2, 'mane ni avde', 1, 10, '2020-08-11 06:54:02', '2020-08-11 06:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `points` bigint(20) NOT NULL DEFAULT 50,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `points`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'laravel497@gmail.com', 1, 75, NULL, '$2y$10$GvwnqhXxOLI62c4i.npTj.zOwxoMwZEXKOpmUZmmZN69O0eTujVv2', NULL, '2020-08-11 04:43:45', '2020-08-11 04:44:03'),
(2, 'Ankit Patil', 'ankitpatil0413@gmail.com', 0, 325, NULL, '$2y$10$OwfojbL5VyZXP3FlPO/BoeTpuWMIEiPrg44XJQcQJQuW26BnTms22', NULL, '2020-08-11 04:43:45', '2020-08-11 06:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `watchers`
--

CREATE TABLE `watchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `watchers`
--
ALTER TABLE `watchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `watchers`
--
ALTER TABLE `watchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
