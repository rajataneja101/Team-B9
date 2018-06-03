package com.teamb9.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.transaction.annotation.Transactional;

import com.teamb9.dto.ProjectStepsDTO;
import com.teamb9.dto.ProjectStepsRequestDTO;

@Transactional
public interface ProjectStepsRepository extends JpaRepository<ProjectStepsRequestDTO, Long>{
		
}
