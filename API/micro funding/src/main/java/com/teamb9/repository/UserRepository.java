package com.teamb9.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.teamb9.dto.UserDetailsDTO;

@Repository
public interface UserRepository extends JpaRepository<UserDetailsDTO, Long>  {
    public UserDetailsDTO findByEmail(String email);
}
