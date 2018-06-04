package com.teamb9.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

import com.teamb9.dto.ProjectStepsDTO;
import com.teamb9.dto.ProjectStepsRequestDTO;

@Transactional
public interface ProjectStepsRepository extends JpaRepository<ProjectStepsRequestDTO, Long>{
		@Query(value="Select * from project_steps where project_id = :projectId", nativeQuery=true)
		public List<ProjectStepsRequestDTO> getProjectSteps(@Param("projectId") String projectId);
}
