package softuniBlog.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;
import softuniBlog.entity.Article;
import softuniBlog.entity.Role;
import softuniBlog.entity.User;

import javax.transaction.Transactional;

@Repository
@Transactional
public interface ArticleRepository extends JpaRepository<Article, Integer> {
    Article findByAuthor(User author);
}