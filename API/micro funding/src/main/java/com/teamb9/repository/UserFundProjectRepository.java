package com.teamb9.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.teamb9.dto.ProjectDTO;
import com.teamb9.dto.UserFundProjectDTO;

public interface UserFundProjectRepository extends JpaRepository<UserFundProjectDTO, Long>  {

}
