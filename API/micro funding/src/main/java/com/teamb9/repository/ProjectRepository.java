package com.teamb9.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import com.teamb9.dto.ProjectDTO;

@Repository
public interface ProjectRepository extends JpaRepository<ProjectDTO, Long>  {
	
    @Query(value="SELECT * FROM project_details where project_id = :projectId",nativeQuery=true
    	    )
    public ProjectDTO findByProjectId(@Param("projectId")String projectId);
}