package com.example.demo.db;

import com.example.demo.models.entity.User;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.TreeMap;

public class UserDB {
    private static UserDB ourInstance = new UserDB();

    private Map<Integer, User> userMap;

    public static UserDB getInstance() {
        return ourInstance;
    }

    private UserDB() {
        this.userMap = new TreeMap<>();
    }

    public void save(User user) {
        int lastId = this.userMap.keySet().size();
        user.setId(++lastId);
        this.userMap.putIfAbsent(lastId, user);
    }

    public User getById(Integer id) {
        if (this.userMap.containsKey(id)) {
            return this.userMap.get(id);
        }

        throw new IllegalArgumentException("Gledai si rabotata");
    }

    public List<User> findAll() {
        List<User> userList = new ArrayList<>(this.userMap.values());
        return userList;
    }

    public void update(User user) {
        this.userMap.put(user.getId(), user);
    }

    public void delete(Integer id) {
        this.userMap.remove(id);
    }
}
