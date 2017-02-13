<?php
/**
 * Created by PhpStorm.
 * User: vitl1
 * Date: 13.02.2017
 * Time: 13:28
 */

namespace BlogBundle\DataFixtures\ORM;

use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog = new Blog();
        $blog->setTitle("First1 title article");
        $blog->setSummary("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus dui felis, nec tincidunt lectus mollis vel. Sed at tempus justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et condimentum libero. Nam sed convallis odio. Sed felis quam, interdum nec condimentum a, congue in metus.
            </p>");
        $blog->setBody("<p>Nulla vel ligula eu urna varius molestie. Mauris iaculis facilisis laoreet. Duis gravida massa quis mauris pharetra tempus. Pellentesque vitae neque et purus varius luctus a sit amet quam. Nullam est augue, efficitur nec mauris eu, suscipit euismod eros. Sed accumsan interdum sollicitudin. Etiam lacinia quam turpis, id finibus sem varius ut.
            Fusce tristique et augue vel dapibus. Suspendisse elementum lectus quis ante luctus lobortis. In ut laoreet lacus. Aenean at auctor metus. Duis ante augue, eleifend pretium efficitur eu, convallis a urna. Maecenas convallis, orci quis consectetur commodo, diam nisl tempor ligula, id porta dolor velit accumsan ante. Nam in consectetur ex, ut semper dui. Donec ut ex et ligula pharetra consectetur.
            </p>");
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("Second2 title article");
        $blog->setSummary("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus dui felis, nec tincidunt lectus mollis vel. Sed at tempus justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et condimentum libero. Nam sed convallis odio. Sed felis quam, interdum nec condimentum a, congue in metus.
            </p>");
        $blog->setBody("<p>Nulla vel ligula eu urna varius molestie. Mauris iaculis facilisis laoreet. Duis gravida massa quis mauris pharetra tempus. Pellentesque vitae neque et purus varius luctus a sit amet quam. Nullam est augue, efficitur nec mauris eu, suscipit euismod eros. Sed accumsan interdum sollicitudin. Etiam lacinia quam turpis, id finibus sem varius ut.
            Fusce tristique et augue vel dapibus. Suspendisse elementum lectus quis ante luctus lobortis. In ut laoreet lacus. Aenean at auctor metus. Duis ante augue, eleifend pretium efficitur eu, convallis a urna. Maecenas convallis, orci quis consectetur commodo, diam nisl tempor ligula, id porta dolor velit accumsan ante. Nam in consectetur ex, ut semper dui. Donec ut ex et ligula pharetra consectetur.
            </p>");
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("Third3 title article");
        $blog->setSummary("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus dui felis, nec tincidunt lectus mollis vel. Sed at tempus justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et condimentum libero. Nam sed convallis odio. Sed felis quam, interdum nec condimentum a, congue in metus.
            </p>");
        $blog->setBody("<p>Nulla vel ligula eu urna varius molestie. Mauris iaculis facilisis laoreet. Duis gravida massa quis mauris pharetra tempus. Pellentesque vitae neque et purus varius luctus a sit amet quam. Nullam est augue, efficitur nec mauris eu, suscipit euismod eros. Sed accumsan interdum sollicitudin. Etiam lacinia quam turpis, id finibus sem varius ut.
            Fusce tristique et augue vel dapibus. Suspendisse elementum lectus quis ante luctus lobortis. In ut laoreet lacus. Aenean at auctor metus. Duis ante augue, eleifend pretium efficitur eu, convallis a urna. Maecenas convallis, orci quis consectetur commodo, diam nisl tempor ligula, id porta dolor velit accumsan ante. Nam in consectetur ex, ut semper dui. Donec ut ex et ligula pharetra consectetur.
            </p>");
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("Fifth4 title article");
        $blog->setSummary("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus dui felis, nec tincidunt lectus mollis vel. Sed at tempus justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et condimentum libero. Nam sed convallis odio. Sed felis quam, interdum nec condimentum a, congue in metus.
            </p>");
        $blog->setBody("<p>Nulla vel ligula eu urna varius molestie. Mauris iaculis facilisis laoreet. Duis gravida massa quis mauris pharetra tempus. Pellentesque vitae neque et purus varius luctus a sit amet quam. Nullam est augue, efficitur nec mauris eu, suscipit euismod eros. Sed accumsan interdum sollicitudin. Etiam lacinia quam turpis, id finibus sem varius ut.
            Fusce tristique et augue vel dapibus. Suspendisse elementum lectus quis ante luctus lobortis. In ut laoreet lacus. Aenean at auctor metus. Duis ante augue, eleifend pretium efficitur eu, convallis a urna. Maecenas convallis, orci quis consectetur commodo, diam nisl tempor ligula, id porta dolor velit accumsan ante. Nam in consectetur ex, ut semper dui. Donec ut ex et ligula pharetra consectetur.
            </p>");
        $manager->persist($blog);

        $manager->flush();
    }
}