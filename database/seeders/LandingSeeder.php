<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\Landing;
use App\Services\SlugService;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    private const FORMS = [
        [
            'attributes' => [
                'form_uid' => 'MO-1600LT',
                'slug' => 'slug1',
                'title' => 'Odit enim et est.',
                'description' => 'Doloribus odio quis ratione. Ex nostrum sunt et officia aut. Consequatur deleniti maxime vitae autem beatae qui. Ipsum delectus ullam laboriosam facere dicta. Minus ut iste aspernatur eligendi autem quia quia. Dolorem unde nemo ex eligendi voluptatem odit. Aut laboriosam nemo vitae sequi mollitia cum. Qui voluptas eos perferendis qui dolorum nisi aut. Iusto quo pariatur quia qui voluptatum fuga porro.',
            ],
            'landings' => [
                [
                    'type' => Landing::TYPE_ONE_CODE,
                    'meta_title' => 'Excepturi sint est.',
                    'meta_description' => 'Sit aliquam delectus exercitationem ea eveniet voluptas sunt. Fugit a ea quaerat expedita. Earum enim officia explicabo ut eius atque. Itaque dolorum eligendi est dignissimos.',
                    'guide' => 'Et et odit labore voluptatum. Maiores corrupti ullam sit voluptate nihil saepe autem qui. Officia laboriosam ullam blanditiis. Voluptatem nobis asperiores rem veniam cupiditate incidunt sint error. Aut et non commodi fuga est sunt quo. Placeat sit deleniti amet quos. Quia aut vel iste exercitationem. Unde vitae aperiam ad ab aut. Tempore omnis itaque maxime aperiam consequuntur eum. Unde quod itaque quis est. Nihil laudantium ratione consequuntur laudantium quia nisi. Placeat sit quia placeat repellendus ex odio. Labore nobis rerum repudiandae. Facere nulla sapiente rerum et reiciendis et et quidem. Qui in porro sed optio neque ullam mollitia error. Perferendis ipsam in vel aliquam. Enim eius et quod itaque consequatur eum laboriosam et. Sit possimus magnam autem alias omnis. At provident aut sunt eveniet nihil saepe nesciunt. Magnam earum dolores dignissimos quas. Corporis est autem ut. Aspernatur qui aut harum magnam. Neque saepe cumque perferendis consequuntur odio cumque. Doloremque a unde impedit occaecati. Tempora sed placeat corrupti architecto ad dolorum odio et. Et incidunt vel dignissimos ipsa nemo alias. Laudantium iusto quia velit placeat sed distinctio ut sed. Est nesciunt ut impedit molestias ut adipisci. Sint animi modi quia omnis voluptatem. Laboriosam iusto numquam optio aliquid. Minima autem est et omnis dignissimos. Praesentium perspiciatis nostrum deleniti necessitatibus tenetur voluptatibus. Sit ut illum aut itaque.',
                ],
                [
                    'type' => Landing::TYPE_TWO_CODE,
                    'meta_title' => 'Et adipisci quasi.',
                    'meta_description' => 'Consequatur voluptatibus tempore sed sit quibusdam. Est doloribus quibusdam eveniet totam beatae similique totam. Aut et optio quia tempora ea. Explicabo at neque sint.',
                    'guide' => 'Eos qui fugit et sunt similique delectus. Pariatur ipsa dolor voluptas nesciunt excepturi voluptatum. Impedit qui deleniti est similique voluptates temporibus. Minima dignissimos est dolorem nemo et. Aut qui molestias explicabo iusto quod consequatur laborum. Aut quidem velit cumque voluptatem. Accusamus aut dolorum odio ut omnis. Reiciendis et sint et cumque facere. Dolorem consequatur eum ut officiis. Tenetur pariatur voluptates quaerat sit est odio est omnis. Consequuntur dignissimos fuga cupiditate quos velit sunt. Nulla minima voluptatem ipsum. Qui ut eaque sunt sit. Ut laboriosam ab autem quaerat. Dolores voluptate aperiam nam facere. Illo enim est modi eligendi. Inventore harum unde occaecati labore esse libero. Reprehenderit quibusdam voluptatem excepturi et consequuntur necessitatibus repellendus. Sit ipsam voluptatibus in ut et beatae sint sunt. Explicabo libero vel harum vero labore quo aut dolorum. Aut eveniet delectus porro enim. Quia molestiae iusto reiciendis eaque est quisquam architecto. Mollitia officiis repudiandae unde nesciunt. Rem omnis rerum et laborum asperiores ut non. Aut ipsum ab pariatur debitis saepe velit nam. Eligendi soluta eum voluptatum quasi dolores. Animi libero eum velit amet odio voluptates quae quasi. Et debitis dolorem ut quae occaecati voluptates. Qui dolore impedit vero iste provident nemo.',
                ],
                [
                    'type' => Landing::TYPE_THREE_CODE,
                    'meta_title' => 'Sint esse animi.',
                    'meta_description' => 'Perferendis tempore molestias pariatur distinctio est doloremque. Sunt dolor voluptas est non harum distinctio aut. Voluptates dolore est tempore quos nihil quod iste reiciendis.',
                    'guide' => 'Numquam ea et reiciendis voluptatibus et ducimus. Cupiditate repellat ratione odio maxime. Necessitatibus rerum in ut sequi id et rerum quaerat. Ut labore nihil eligendi nostrum delectus deserunt. Ipsam impedit assumenda sunt voluptatem officiis eum velit. Architecto impedit consequatur at rerum vero. Quam molestiae aut est velit consequatur. Sint sit dicta exercitationem voluptas magnam. Laboriosam suscipit beatae inventore delectus et. Qui dolorem consequuntur repellendus deserunt et blanditiis facere. Laborum tempora est distinctio corporis iure. Aliquid consectetur voluptatem nihil. Minus aliquam minus sit ex architecto mollitia numquam. Ratione totam voluptatem tenetur autem aut optio. Nulla delectus veniam quo repellendus ipsam inventore. Ut quas aut omnis nesciunt. Saepe corrupti sapiente ut nulla. Enim ipsum asperiores velit dolor voluptate. Quia soluta sunt ratione laboriosam quos nam repellat necessitatibus. Voluptatem inventore voluptatum non dolore laboriosam. Excepturi praesentium natus illo. Et nam ut est autem. Debitis qui et quo. Illum saepe natus velit sapiente nesciunt. Magnam quia aut quasi ipsum repellat. Eum rerum ab nihil rem sed et. Est voluptatem sequi animi minima quis maxime. Dolorem mollitia vero ipsum explicabo voluptas. Repellat ea aspernatur ut aliquam tempora dolorem ut. Nostrum unde ab quis necessitatibus aperiam. Officiis iste quasi asperiores. Voluptatibus consequuntur vero vitae.',
                ]
            ]
        ],
        [
            'attributes' => [
                'form_uid' => 'AL-1203LT',
                'slug' => 'slug12',
                'title' => 'Assumenda et ex earum velit.',
                'description' => 'Illo debitis dignissimos qui corrupti occaecati. Sed et sunt accusamus facere delectus reprehenderit. Nulla doloremque dolor fugit sunt fugit. Molestiae vero doloribus quod architecto expedita. Ex harum commodi cupiditate. Saepe voluptatem sit pariatur eligendi. Et perferendis quis deleniti sit alias excepturi. Ut explicabo est tempore nobis sint culpa. Iusto amet eaque tempora sunt quia dolorum consequuntur. Laborum consequatur voluptatem omnis dolor aut magni id. Assumenda tempora et ut.',
            ],
            'landings' => [
                [
                    'type' => Landing::TYPE_ONE_CODE,
                    'meta_title' => 'Odit fugit non cum.',
                    'meta_description' => 'Nisi ea et tempore error. Quasi minima veritatis quia rerum voluptas voluptatibus eos. Eveniet exercitationem ea non eos doloribus vel.',
                    'guide' => 'Repellat aut soluta minus ipsam eligendi voluptatem velit. Incidunt sunt aspernatur qui tempore dolorum quisquam qui. Accusantium omnis dolores autem accusantium quia eum. Deserunt quae quod dignissimos distinctio numquam libero placeat quo. Eos et rerum soluta quisquam excepturi amet. Et distinctio labore autem alias quia est ut enim. Eveniet omnis dolores aut facere vel. Laborum placeat ex quasi quos in enim quas voluptate. Nulla dolorem architecto doloribus fugit sunt voluptatum similique. Eius non voluptates omnis doloremque aspernatur. Quo eaque dolore eligendi non ad praesentium qui dignissimos. Et dolores et perspiciatis inventore quis. Omnis consequatur ex consequatur velit quaerat hic. Aut omnis neque exercitationem ut tenetur mollitia. Iure animi voluptatibus voluptatem iste aut cumque. Accusantium consequatur quo a ut ut autem voluptate tempora. Laborum consectetur est sed est ut nisi architecto aperiam. Nobis aut et dolorum. Id minus in magnam iusto et sequi. Tenetur voluptas ut eos voluptatum. Alias sequi odit in velit dicta. Earum aliquid animi consequuntur illo vel consequuntur. Est eum earum eum similique quo ipsum perferendis accusamus. Aperiam praesentium nam illo earum ut in voluptate. Possimus dignissimos molestiae amet ut. At est aspernatur in asperiores vel veniam voluptatem. Aut alias laborum commodi et vitae. Repellat quam at id itaque non. Rerum omnis est aut animi nulla fugiat.',
                ],
                [
                    'type' => Landing::TYPE_TWO_CODE,
                    'meta_title' => 'Est veritatis est.',
                    'meta_description' => 'Non quis in velit assumenda dolores. Laborum asperiores perspiciatis perspiciatis harum accusantium molestiae numquam.',
                    'guide' => 'Cumque sit molestiae illo nihil. Dignissimos hic eos sunt mollitia placeat quibusdam esse. Corrupti aliquam eos recusandae aliquam at aliquam. Repudiandae porro perferendis error occaecati. Exercitationem vel nobis nulla natus dignissimos quas. Suscipit quis labore aperiam vitae suscipit voluptate. Non consequatur eaque magni consequatur est. Temporibus adipisci deleniti quibusdam consequatur qui. Velit quas consequatur ut blanditiis. In non vel commodi et. Nisi dolorem sit incidunt enim. Corporis maxime dolorum et sint ducimus enim itaque. Natus qui beatae minima nihil mollitia et. Consectetur tempora laborum dolores in possimus enim occaecati. Voluptatem error modi non omnis eos eligendi. Dignissimos consectetur expedita voluptate. Quisquam autem a ut aliquid assumenda ipsum quas expedita. Quis aut molestiae consequatur. Ut voluptas molestias dolorem quae et ipsum. Sit impedit quia repellendus dolore dolores minus. Dolor adipisci sed minima debitis tenetur sed. Impedit eveniet quidem cupiditate ut nostrum corporis. Ut eos laudantium iure est. Qui consequatur ut qui aut qui amet. Est quae est doloremque aspernatur id rerum. Amet delectus rem sapiente quia. In et aperiam a atque reprehenderit dolorem minus. Est nihil molestias eum ipsa excepturi quia iusto. Quod nemo facilis mollitia. Reprehenderit qui voluptate nulla non nobis architecto. Quos itaque deleniti eligendi accusamus quia est perspiciatis. Voluptatibus qui qui consequatur animi.',
                ],
                [
                    'type' => Landing::TYPE_THREE_CODE,
                    'meta_title' => 'Quibusdam esse.',
                    'meta_description' => 'Et quia cumque aperiam saepe neque consectetur. Inventore consectetur voluptatem eveniet eum molestiae delectus tenetur.',
                    'guide' => 'Quia sed excepturi dolorum molestiae. Delectus numquam dolores optio nam recusandae deleniti possimus voluptas. Iusto ut ad rerum nesciunt fuga in. Totam deserunt eum similique cupiditate esse omnis et. Aliquam veritatis magni a voluptatem nihil. Voluptatem aperiam ducimus consequatur reprehenderit omnis. Facere deleniti et modi est repudiandae. A rerum dolorem ut. Dolorem rerum aliquam ut voluptas voluptatem. Quidem eos voluptates dolorem optio quia non facilis. Dolore laborum nesciunt officia et repudiandae eveniet. Quasi eligendi vel consectetur reprehenderit nihil quisquam. Aperiam sed quia iusto dolorum pariatur. Expedita est et officia maxime saepe sit exercitationem. Eos aspernatur accusantium dignissimos nulla. Repudiandae quae voluptas temporibus voluptatem. Amet dicta dicta non porro a ut rem. Et quasi omnis pariatur et quibusdam soluta id. Asperiores voluptate suscipit quas maiores. Et consequuntur sit suscipit fugit voluptate eos amet. Mollitia quisquam veniam eos sit quia atque. Ipsam quibusdam eaque quia consequuntur autem quis cupiditate. Hic quos laudantium similique facere et assumenda. Architecto beatae nostrum vero perspiciatis iusto vitae. Et voluptas illum dignissimos explicabo est. Exercitationem repellat ut explicabo corrupti laudantium voluptatibus atque. Reiciendis sapiente ut eius. Sit voluptatem quia culpa deleniti dolorum.',
                ]
            ]
        ],
        [
            'attributes' => [
                'form_uid' => 'CA-CV-2MP-FED',
                'slug' => 'slug123',
                'title' => 'Aut sed unde sit excepturi.',
                'description' => 'Maxime magnam qui reprehenderit qui. Consequatur maxime commodi aperiam error. Ea earum et distinctio. Deleniti in quisquam est quam sunt iure. Quis autem placeat quis accusantium nam dolorem enim a. Temporibus illo impedit aut recusandae. Quia dolorem consequatur laudantium molestiae. Illum voluptatum aut sint autem veritatis. Ab quae ut est. Veniam perspiciatis sed quidem quaerat. Et omnis soluta culpa ut laudantium. Et placeat voluptate quaerat facilis amet.',
            ],
            'landings' => [
                [
                    'type' => Landing::TYPE_ONE_CODE,
                    'meta_title' => 'Dolor nostrum aut.',
                    'meta_description' => 'Dolor beatae enim et mollitia. Fugit doloremque consequatur vel. Consectetur nemo et dolorem pariatur veniam magnam iste.',
                    'guide' => 'Enim rerum sit consequatur et. Doloremque totam ut reiciendis. Cum illum suscipit ratione numquam dolore. Id saepe consequatur consequatur alias eligendi. Eum ab itaque consequatur alias voluptatem velit. Quis qui aut in similique et esse. Nam quis deserunt commodi hic. Vero tenetur quam earum quas assumenda. Placeat vel sit accusantium in. Qui expedita ipsa quae omnis est error. Ut aut et optio temporibus. Autem libero molestiae labore optio. Minus voluptate ipsa et deleniti tempore sunt consequuntur. Provident cumque autem voluptatibus dolore et velit. Aliquam consequuntur et dolorem et nulla. Eos vel in est voluptatem ratione. Voluptas est error dolores inventore soluta non. Blanditiis dolor laboriosam omnis possimus quos magnam porro. Qui odio omnis dolor. Nulla sint sequi similique repellendus harum. Sapiente et debitis est repellendus quaerat esse provident. Qui dicta quia et non quia repudiandae ducimus at. Magnam sequi vitae ut at assumenda. Voluptatem sit vero eius et aut consequatur. Rem sit aut dolores. Labore distinctio fugit praesentium voluptas eos quasi error. Quasi aut sunt culpa omnis ipsa quaerat pariatur. Eaque est et repudiandae eos non. Voluptates itaque et ratione odio. Vero quo ullam et iure. Quisquam est expedita perspiciatis aliquid iste. Est ut voluptate corrupti qui quam corporis quia id.',
                ],
                [
                    'type' => Landing::TYPE_TWO_CODE,
                    'meta_title' => 'Nulla ducimus quam.',
                    'meta_description' => 'Incidunt quia ex possimus similique ut libero voluptate. Porro unde et quod. Voluptas veritatis consequatur quia omnis quia. Accusamus unde quas similique illo quia.',
                    'guide' => 'Possimus sed dignissimos quae quaerat rem. Eos voluptatibus maiores corporis sed. Pariatur reprehenderit quidem illum ipsum dolorem et. Dignissimos cumque numquam est maxime eos sapiente quidem qui. Ut non iusto molestiae et debitis dolor et temporibus. Consequuntur distinctio occaecati in ea dolorem aut consequuntur. Aut et rem dicta quod. Omnis ea est ad nesciunt et laudantium. Distinctio maiores ea ut adipisci eum voluptatem eos. Ut sit eligendi officia ut distinctio qui exercitationem. Ullam quis blanditiis non distinctio sit doloremque. Ut voluptas maxime delectus. Nihil magni corporis id. Pariatur ut necessitatibus minima maiores est aut excepturi voluptas. Odio quos sed sint dignissimos rerum. Dicta ut sequi rem. Minima ad omnis et doloribus autem. Sint rerum vitae et facere consequatur ex consequatur. Consequatur omnis aut id iusto harum nisi. Quibusdam at voluptas odit sed. Recusandae expedita rerum excepturi aut sed voluptas. Necessitatibus architecto tenetur quidem omnis ipsa. Illo placeat laboriosam voluptatum fugiat consequatur maiores sint. Ea sit corporis qui dolorum et minus velit. Est mollitia vero illum ducimus alias. Quidem aliquid quae deleniti sed ducimus numquam dolorem eius. Dolores a similique corrupti in animi. Vel velit nobis est dolores nisi. Earum saepe doloribus omnis asperiores. Nam totam illo aliquid pariatur illo occaecati incidunt.',
                ],
                [
                    'type' => Landing::TYPE_THREE_CODE,
                    'meta_title' => 'Repellat et.',
                    'meta_description' => 'Aliquid dolorem fugiat ipsum eum illo enim assumenda. Minus qui quaerat explicabo voluptatem eos voluptas itaque. Quam cumque ad eos. Veritatis omnis qui totam dolor. Ut explicabo quia aut quibusdam.',
                    'guide' => 'Aliquam omnis esse aliquam assumenda. Minima ipsum aliquam odio reprehenderit officia error. Tenetur animi rem voluptatem rerum aut ut similique. Ipsam minima necessitatibus quidem assumenda dolore dolorum iure. Voluptatem optio et modi corporis mollitia expedita expedita perspiciatis. Beatae sequi commodi est dolorem provident ipsa qui. Nemo animi consequuntur et velit est. Aut modi qui perspiciatis similique quo exercitationem excepturi. Perferendis dolore sed rerum est ullam omnis. Ad in doloribus dicta tenetur ut ipsam accusantium. Aut quasi voluptatibus repellat non. Blanditiis illum illo hic voluptas. Eaque autem velit aliquam quae temporibus. Aspernatur deserunt sit non ratione impedit. Aliquid quasi et blanditiis fuga maiores. Ea et omnis possimus exercitationem officiis exercitationem molestiae. Unde pariatur rerum vel quaerat dolore ducimus. Sequi quia eum tenetur nostrum ut nobis. Incidunt officia amet assumenda quia exercitationem ipsum tempora. Ut et at fugit qui. Omnis blanditiis impedit sequi. Suscipit earum distinctio nisi. Doloremque eum natus qui fuga excepturi culpa. Quis et eos exercitationem et facilis. Sapiente nisi et ullam rerum. Qui reprehenderit rerum officia sit perferendis iste deserunt. Distinctio voluptas unde laboriosam ut laudantium. Sint voluptatum corrupti quam inventore blanditiis. Iusto vitae sit mollitia soluta impedit voluptatum.',
                ]
            ]
        ],
        [
            'attributes' => [
                'form_uid' => 'MS-1600LT',
                'slug' => 'slug1234',
                'title' => 'Rerum ab qui maxime.',
                'description' => 'Beatae pariatur illum aut nisi deserunt. Accusamus aliquam enim nesciunt velit sint tempora tempore. Soluta laboriosam et dolor aliquam. Quasi aut corrupti tenetur nam sit sapiente dolor ut. Qui iure eum veritatis natus maiores rerum molestiae. Est et rerum ea. Ipsa dolores et recusandae quaerat animi omnis. Natus assumenda dolorem laboriosam rerum non voluptate mollitia. Dolor vel eos aliquid. Dignissimos similique sit et natus voluptatem aut tempora.',
            ],
            'landings' => [
                [
                    'type' => Landing::TYPE_ONE_CODE,
                    'meta_title' => 'Est doloremque est.',
                    'meta_description' => 'Neque reprehenderit sint ad commodi accusantium assumenda. Dolor debitis aut sed nemo error facere. Neque autem dolorem eum consequatur sit ut magnam. Qui amet ut quos eum nam a.',
                    'guide' => 'Tempore recusandae enim eius sed. Cum velit impedit hic voluptas. Voluptas et et nemo omnis. Eum ipsa reprehenderit qui doloremque est aut repellendus. Numquam nobis tenetur numquam quibusdam culpa nemo. Similique minima ut delectus velit repudiandae aut. Incidunt quia adipisci velit aliquam velit velit est. Et maxime eligendi reprehenderit qui mollitia incidunt. Quia consequatur dicta ad corporis eos nihil et. Ut velit repudiandae ea impedit qui qui non. Dolor eos reiciendis impedit autem eligendi. Placeat maxime minus nobis sapiente. Eos repudiandae vitae laborum expedita saepe dicta voluptatem. Doloribus magnam voluptas sed asperiores voluptatum. Saepe minima eum reiciendis dolorem sunt molestias voluptas itaque. Vitae repellendus et praesentium nisi dolorem. Natus magni quos dolorem beatae quia. Quod nesciunt ut nulla in optio sint. Et ducimus aut quae ea accusantium. Tenetur iusto et illo vero. Reprehenderit ea voluptas tempore qui. Quo quia neque perferendis. Nihil illo unde id eos ipsum tenetur consequuntur. Dolor ut voluptatibus illum impedit at quaerat. Qui est rerum repellendus. Labore officiis est ut itaque. Impedit assumenda molestiae earum in incidunt ad temporibus. Quaerat excepturi molestias dolorum quia magnam recusandae doloribus ut. Asperiores voluptas eos dolorum maxime at aut nobis quos. Nobis dolore expedita sint et est adipisci. Similique exercitationem consequatur reprehenderit qui ab. Et ut nostrum aut mollitia quia maxime dolorem.',
                ],
                [
                    'type' => Landing::TYPE_TWO_CODE,
                    'meta_title' => 'Suscipit nisi et.',
                    'meta_description' => 'Ea totam in explicabo excepturi hic temporibus. Dolore culpa est omnis velit. Aut fugiat aspernatur numquam aut.',
                    'guide' => 'Ab voluptatem eaque quod cupiditate. Doloribus harum dolores earum. Tempora ut asperiores beatae dolor similique aut. Eos accusamus tenetur magnam vel enim. Exercitationem a eum aut aut eligendi. Veniam deleniti nisi ipsa non. Ipsa fugit qui qui ipsa est veniam et. Fugit maiores repellendus voluptatem corporis. Quidem reiciendis necessitatibus aut. Odio magni consequatur optio odio. Harum aspernatur voluptatem velit est voluptates sequi quia quo. Alias rerum maxime deleniti vero sunt. Animi vitae non magnam consequuntur voluptatibus laborum cumque in. Dolores similique aut perferendis totam quaerat adipisci ipsum. Beatae nobis consequatur ut exercitationem culpa blanditiis sit. Repellendus omnis quia nihil eos possimus. Est neque vel explicabo. Voluptas sapiente qui ut quasi doloremque maiores. Rerum qui mollitia placeat distinctio eos dolorum incidunt. Quis necessitatibus facere sed et accusamus necessitatibus. Optio dignissimos quam et accusantium recusandae molestiae aut quia. Eveniet itaque est aperiam beatae. Hic voluptatibus reprehenderit et. Itaque inventore eum repellat nobis. Est commodi sapiente dolores quas laborum. Nisi totam sequi voluptas assumenda nam blanditiis. Qui debitis saepe ut incidunt in. A sunt laboriosam voluptatum. Consequatur itaque et aut ea et nam expedita. Quas earum ut corrupti voluptatem corrupti. Quisquam eaque neque fuga odio.',
                ],
                [
                    'type' => Landing::TYPE_THREE_CODE,
                    'meta_title' => 'Excepturi sint est.',
                    'meta_description' => 'Sit aliquam delectus exercitationem ea eveniet voluptas sunt. Fugit a ea quaerat expedita. Earum enim officia explicabo ut eius atque. Itaque dolorum eligendi est dignissimos.',
                    'guide' => 'Et et odit labore voluptatum. Maiores corrupti ullam sit voluptate nihil saepe autem qui. Officia laboriosam ullam blanditiis. Voluptatem nobis asperiores rem veniam cupiditate incidunt sint error. Aut et non commodi fuga est sunt quo. Placeat sit deleniti amet quos. Quia aut vel iste exercitationem. Unde vitae aperiam ad ab aut. Tempore omnis itaque maxime aperiam consequuntur eum. Unde quod itaque quis est. Nihil laudantium ratione consequuntur laudantium quia nisi. Placeat sit quia placeat repellendus ex odio. Labore nobis rerum repudiandae. Facere nulla sapiente rerum et reiciendis et et quidem. Qui in porro sed optio neque ullam mollitia error. Perferendis ipsam in vel aliquam. Enim eius et quod itaque consequatur eum laboriosam et. Sit possimus magnam autem alias omnis. At provident aut sunt eveniet nihil saepe nesciunt. Magnam earum dolores dignissimos quas. Corporis est autem ut. Aspernatur qui aut harum magnam. Neque saepe cumque perferendis consequuntur odio cumque. Doloremque a unde impedit occaecati. Tempora sed placeat corrupti architecto ad dolorum odio et. Et incidunt vel dignissimos ipsa nemo alias. Laudantium iusto quia velit placeat sed distinctio ut sed. Est nesciunt ut impedit molestias ut adipisci. Sint animi modi quia omnis voluptatem. Laboriosam iusto numquam optio aliquid. Minima autem est et omnis dignissimos. Praesentium perspiciatis nostrum deleniti necessitatibus tenetur voluptatibus. Sit ut illum aut itaque.',
                ]
            ]
        ],
        [
            'attributes' => [
                'form_uid' => 'SD-1600LT',
                'slug' => 'slug12345',
                'title' => 'Aut sint fugit non.',
                'description' => 'Voluptatem eum cumque fugiat aliquam illo qui aliquam. Rem est dolor adipisci vitae. Minus exercitationem alias magni voluptas architecto quia perferendis sint. Explicabo magni quaerat velit ratione autem rerum. Aut culpa illum eum aut debitis voluptate culpa et. Odio ratione nihil at minus. Iste ea quo dolores autem. Quidem tempore quibusdam quis consequatur ab. Et qui qui nisi esse. Cumque sint minus non aut dolorem veniam qui nulla.',
            ],
            'landings' => [
                [
                    'type' => Landing::TYPE_ONE_CODE,
                    'meta_title' => 'Et adipisci quasi.',
                    'meta_description' => 'Consequatur voluptatibus tempore sed sit quibusdam. Est doloribus quibusdam eveniet totam beatae similique totam. Aut et optio quia tempora ea. Explicabo at neque sint.',
                    'guide' => 'Eos qui fugit et sunt similique delectus. Pariatur ipsa dolor voluptas nesciunt excepturi voluptatum. Impedit qui deleniti est similique voluptates temporibus. Minima dignissimos est dolorem nemo et. Aut qui molestias explicabo iusto quod consequatur laborum. Aut quidem velit cumque voluptatem. Accusamus aut dolorum odio ut omnis. Reiciendis et sint et cumque facere. Dolorem consequatur eum ut officiis. Tenetur pariatur voluptates quaerat sit est odio est omnis. Consequuntur dignissimos fuga cupiditate quos velit sunt. Nulla minima voluptatem ipsum. Qui ut eaque sunt sit. Ut laboriosam ab autem quaerat. Dolores voluptate aperiam nam facere. Illo enim est modi eligendi. Inventore harum unde occaecati labore esse libero. Reprehenderit quibusdam voluptatem excepturi et consequuntur necessitatibus repellendus. Sit ipsam voluptatibus in ut et beatae sint sunt. Explicabo libero vel harum vero labore quo aut dolorum. Aut eveniet delectus porro enim. Quia molestiae iusto reiciendis eaque est quisquam architecto. Mollitia officiis repudiandae unde nesciunt. Rem omnis rerum et laborum asperiores ut non. Aut ipsum ab pariatur debitis saepe velit nam. Eligendi soluta eum voluptatum quasi dolores. Animi libero eum velit amet odio voluptates quae quasi. Et debitis dolorem ut quae occaecati voluptates. Qui dolore impedit vero iste provident nemo.',
                ],
                [
                    'type' => Landing::TYPE_TWO_CODE,
                    'meta_title' => 'Sint esse animi.',
                    'meta_description' => 'Perferendis tempore molestias pariatur distinctio est doloremque. Sunt dolor voluptas est non harum distinctio aut. Voluptates dolore est tempore quos nihil quod iste reiciendis.',
                    'guide' => 'Numquam ea et reiciendis voluptatibus et ducimus. Cupiditate repellat ratione odio maxime. Necessitatibus rerum in ut sequi id et rerum quaerat. Ut labore nihil eligendi nostrum delectus deserunt. Ipsam impedit assumenda sunt voluptatem officiis eum velit. Architecto impedit consequatur at rerum vero. Quam molestiae aut est velit consequatur. Sint sit dicta exercitationem voluptas magnam. Laboriosam suscipit beatae inventore delectus et. Qui dolorem consequuntur repellendus deserunt et blanditiis facere. Laborum tempora est distinctio corporis iure. Aliquid consectetur voluptatem nihil. Minus aliquam minus sit ex architecto mollitia numquam. Ratione totam voluptatem tenetur autem aut optio. Nulla delectus veniam quo repellendus ipsam inventore. Ut quas aut omnis nesciunt. Saepe corrupti sapiente ut nulla. Enim ipsum asperiores velit dolor voluptate. Quia soluta sunt ratione laboriosam quos nam repellat necessitatibus. Voluptatem inventore voluptatum non dolore laboriosam. Excepturi praesentium natus illo. Et nam ut est autem. Debitis qui et quo. Illum saepe natus velit sapiente nesciunt. Magnam quia aut quasi ipsum repellat. Eum rerum ab nihil rem sed et. Est voluptatem sequi animi minima quis maxime. Dolorem mollitia vero ipsum explicabo voluptas. Repellat ea aspernatur ut aliquam tempora dolorem ut. Nostrum unde ab quis necessitatibus aperiam. Officiis iste quasi asperiores. Voluptatibus consequuntur vero vitae.',
                ],
                [
                    'type' => Landing::TYPE_THREE_CODE,
                    'meta_title' => 'Odit fugit non cum.',
                    'meta_description' => 'Nisi ea et tempore error. Quasi minima veritatis quia rerum voluptas voluptatibus eos. Eveniet exercitationem ea non eos doloribus vel.',
                    'guide' => 'Repellat aut soluta minus ipsam eligendi voluptatem velit. Incidunt sunt aspernatur qui tempore dolorum quisquam qui. Accusantium omnis dolores autem accusantium quia eum. Deserunt quae quod dignissimos distinctio numquam libero placeat quo. Eos et rerum soluta quisquam excepturi amet. Et distinctio labore autem alias quia est ut enim. Eveniet omnis dolores aut facere vel. Laborum placeat ex quasi quos in enim quas voluptate. Nulla dolorem architecto doloribus fugit sunt voluptatum similique. Eius non voluptates omnis doloremque aspernatur. Quo eaque dolore eligendi non ad praesentium qui dignissimos. Et dolores et perspiciatis inventore quis. Omnis consequatur ex consequatur velit quaerat hic. Aut omnis neque exercitationem ut tenetur mollitia. Iure animi voluptatibus voluptatem iste aut cumque. Accusantium consequatur quo a ut ut autem voluptate tempora. Laborum consectetur est sed est ut nisi architecto aperiam. Nobis aut et dolorum. Id minus in magnam iusto et sequi. Tenetur voluptas ut eos voluptatum. Alias sequi odit in velit dicta. Earum aliquid animi consequuntur illo vel consequuntur. Est eum earum eum similique quo ipsum perferendis accusamus. Aperiam praesentium nam illo earum ut in voluptate. Possimus dignissimos molestiae amet ut. At est aspernatur in asperiores vel veniam voluptatem. Aut alias laborum commodi et vitae. Repellat quam at id itaque non. Rerum omnis est aut animi nulla fugiat.',
                ]
            ]
        ]
    ];

    public function run(SlugService $slugService)
    {
//        $slugService = new SlugService();
        foreach (self::FORMS as $formData) {
            $form = new Form($formData['attributes']);
            $form->slug = $slugService->createSlug($form->title);
            $form->save();

            foreach ($formData['landings'] as $landingData) {
                $landing = new Landing($landingData);
                $landing->form_id = $form->id;
                $landing->save();
            }
        }
    }
}
